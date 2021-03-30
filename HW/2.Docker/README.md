### 1) Use only Dockerfile

#### Build Docker: 
docker build . -t nginx:2048
#### Docker start:
docker run -d -p 80:80 nginx:2048
#### Play game:
Open in browser http://localhost
### 2) Use docker-compose+counter: 
#### Start docker-compose
docker-compose up -d
#### Play game:
Open in browser http://localhost
#### Watch Hits:
http://localhost/counterView.php

   
P.S. If you have error: Warning: fopen(countlog.txt): failed to open ...  
add some right:  
**chmod 777 ./2048/countlog.txt**