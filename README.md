# ElasticSearch-Laravel
Integrate Elasticsearch with Laravel



# Run Elasticsearch Image with Volume set to d:\data\elasticsearch\es-laravel
docker run --rm -d -e "discovery.type=single-node" -e "bootstrap.memory_lock=true" -v /d/Data/elasticsearch/es-laravel:/usr/share/elasticsearch/data -p 9200:9200 elasticsearch:6.8.1
