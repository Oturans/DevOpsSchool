###     HW canary Deployment

Task 2: https://gitlab.com/evgeniim/network/-/blob/master/homework.md

#### 1. Requirements 
    - Kubernetes  
    - Nginx ingress controller in cluster Kubernetes
    (I used https://raw.githubusercontent.com/kubernetes/ingress-nginx/controller-v0.44.0/deploy/static/provider/baremetal/deploy.yaml)

I used Kubernetes in VM (1 master and 1 worker) with Nginx Ingress Controller(NodePort). 

#### 2. Install to Kubernetes next yaml
```
kubectl apply -f nginx-configmap.yaml -f nginx-canary-configmap.yaml -f nginx-deployment.yaml -f nginx-canary-deployment.yaml -f ingress.yaml -f ingress-canary.yaml
```
I used 2 Nginx with different main pages(Version 1 and Version 2)
Also 2 services each for both Nginx and 2 rules for Ingress. 

#### 3. Check how it works

If you will use in Headers "canary:always", you receive version 2:  
```
curl -H "Host: canary.example.com" -H "canary:always" http://IP_kubernetes:NodePort_ingress
```
><html>                                        
><h1>Hello World!</h1>
><p>!!!!!!!!!!This is version 2!!!!!!!!</p>
></html>
 
If you won't use additional headers you receive version 1:  
```
curl -H "Host: canary.example.com" http://IP_kubernetes:NodePort_ingress
```
><html>
><h1>Hello World!</h1>
><p>This is version 1</p>
></html>