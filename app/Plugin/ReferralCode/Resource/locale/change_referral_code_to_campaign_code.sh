#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)

function replace_file() {
  file_path=$1
  from=$2
  to=$3

  # take backup and replace
  sed -i.bak -e "s/${from}/${to}/g" ${file_path}
  echo "replaced ${file_path}."
}

replace_file "${SCRIPT_DIR}/messages.ja.yaml" "紹介コード" "キャンペーンコード"
replace_file "${SCRIPT_DIR}/../../composer.json" "紹介コード" "キャンペーンコード"
