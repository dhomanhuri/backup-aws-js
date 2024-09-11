docker build -t my-static-site .
docker run -p 8080:80 --name mystsite  my-static-site
