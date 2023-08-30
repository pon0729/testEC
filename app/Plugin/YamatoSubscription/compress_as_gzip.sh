#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)
CURRENT_DIR_NAME=$(basename "$(pwd)")

cd ${SCRIPT_DIR}
tar -cvf ../${CURRENT_DIR_NAME}.tar.gz ./*
