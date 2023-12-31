<?php

namespace Plugin\CMBlog\Controller\Web;


use Eccube\Controller\AbstractController;
use Knp\Component\Pager\Paginator;
use Plugin\CMBlog\Entity\Blog;
use Plugin\CMBlog\Entity\BlogStatus;
use Plugin\CMBlog\Form\Type\Admin\BlogType;
use Plugin\CMBlog\Repository\BlogRepository;
use Plugin\CMBlog\Repository\CategoryRepository;
use Plugin\CMBlog\Repository\ConfigRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @var BlogRepository
     */
    protected $blogRepository;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * BlogController constructor.
     *
     * @param BlogRepository $blogRepository
     * @param ConfigRepository $blogRepository
     */
    public function __construct(
        BlogRepository $blogRepository,
        CategoryRepository $categoryRepository,
        PageRepository $pageRepository,
        ConfigRepository $configRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->categoryRepository = $categoryRepository;
        $this->configRepository = $configRepository;
        $this->pageRepository = $pageRepository;
    }

    /**
     * @Route("/blog/", name="cm_blog_page_list")
     * @Template("web/list.twig")
     */
    public function index(Request $request, Paginator $paginator)
    {
        $form = $this->createForm(BlogType::class);
        $search = $request->query->all();
        $search["status"] = 1;
        $qb = $this->blogRepository->getQueryBuilderBySearchData($search);


        $config = $this->configRepository->get();

        $pagination = $paginator->paginate(
            $qb,
            !empty($search['pageno']) ? $search['pageno'] : 1,
            !empty($search['disp_number']) ? $search['disp_number'] : $config->getDisplayPage()
        );

        return [
            'form' => $form->createView(),
            'categories' => $this->categoryRepository->getFrontCategoryList(),
            'pagination' => $pagination,
        ];
    }

    /**
     * @Route("/blog/{id}/", name="cm_blog_page_detail")
     * @Template("web/detail.twig")
     */
    public function detail(Request $request, $id)
    {
        $blog = $this->blogRepository->get($id);

        if (!$blog || !$this->checkVisibility($blog)) {
            $this->addError('ブログを見つかりませんでした。');
            return $this->redirectToRoute('cm_blog_page_list');
        }

        $config = $this->configRepository->get();

        $form = $this->createForm(BlogType::class, $blog);

        $cmPage = $this->pageRepository->findOneBy(['url'  => 'cm_blog_page_detail']);
    
        if($blog->getAuthor() != Null){
            $Page["author"] = $blog->getAuthor();
        }else $Page["author"] = $cmPage->getAuthor();
            

        if($blog->getDescription() != Null){
            $Page["description"] = $blog->getDescription();
        }else $Page["description"] = $cmPage->getDescription();
        
    
        if($blog->getKeyword() != Null){
            $Page["keyword"] = $blog->getKeyword();
        }else $Page["keyword"] = $cmPage->getKeyword();
        

        if($blog->getRobot() != Null){
            $Page["meta_robots"] = $blog->getRobot();
        }else $Page["meta_robots"] = $cmPage->getMetaRobots();
        

        if($blog->getMetatag() != Null){
            $Page["meta_tags"] = $blog->getMetatag();
        }else $Page["meta_tags"] = $cmPage->getMetaTags();
        
        return [
            'form' => $form->createView(),
            'blog' => $blog,
            'Page' => $Page,
            'subtitle' => $blog->getTitle()
        ];
    }


    /**
     * 閲覧可能なブログかどうかを判定
     *
     * @param Blog $blog
     *
     * @return boolean 閲覧可能な場合はtrue
     */
    protected function checkVisibility(Blog $blog)
    {
        $is_admin = $this->session->has('_security_admin');

        // 管理ユーザの場合はステータスやオプションにかかわらず閲覧可能.
        if (!$is_admin) {
            if ($blog->getStatus()->getId() !== BlogStatus::DISPLAY_SHOW) {
                return false;
            }
        }

        return true;
    }
}
