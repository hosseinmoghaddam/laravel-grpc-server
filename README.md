# GRPC

## php

```bash
brew install protobuf
pecl install grpc
```

you should make php plugin 

```bash
clone -b v1.70.0 https://github.com/grpc/grpc
cd grpc
git submodule update --init
mkdir -p cmake/build
cd cmake/build
cmake ../..
make protoc protoc-gen-grpc  #grpc_php_plugin

#move or copy to root project
cp  ../grpc2test/cmake/build/protoc-gen-grpc protoc-gen-grpc
chmod +x protoc-gen-grpc
protoc --proto_path=protos --php_out=outputphp --grpc_out=output --plugin=./protoc-gen-grpc protos/my_service.proto
# generate php files
composer require google/protobuf grpc/grpc
```