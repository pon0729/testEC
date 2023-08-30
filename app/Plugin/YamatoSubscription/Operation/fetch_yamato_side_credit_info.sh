#!/bin/bash

POST_DATA="check_sum=&authentication_key=&member_id=&trader_code=&function_div=A03"

curl -X POST -H "Content-Type: application/x-www-form-urlencoded; charset=UTF-8" -d "${POST_DATA}" \
  https://api.kuronekoyamato.co.jp/api/creditInfoGet
