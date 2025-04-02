#!/bin/bash

docker run -it --rm \
  -v $(pwd):/local -w /local/ \
  swaggerapi/swagger-codegen-cli-v3 generate \
  -l php \
  -i v1.47.yaml \
  -o generated-php \
  -t templates \
  -c swagger-config.json
