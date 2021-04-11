## HomeWork part #3
1. Complete chart of the simple application from the lecture. It should be configurable with 
values. At least you should implement:
• Number of replicas
• Labels
• Network ports
• Resource names should have similar pattern, for example app-svc and app-ingress
• Resources (it should be optional)
2. Any other change that will make code cleaner and avoid repetition


#### 1. Requirements 
    - Kubernetes  
    - Nginx ingress controller in cluster Kubernetes
    (I used https://raw.githubusercontent.com/kubernetes/ingress-nginx/controller-v0.44.0/deploy/static/provider/baremetal/deploy.yaml)

I used Kubernetes in VM (1 master and 1 worker) with Nginx Ingress Controller(NodePort).  

#### 2. What I did:

I modify file you can chack on next link:  

https://github.com/Oturans/DevOpsSchool/tree/main/HW/3.Kubernetes/HW3/Task3/app/templates  

Also I added values in [values.yaml][1]

[1]: https://github.com/Oturans/DevOpsSchool/blob/main/HW/3.Kubernetes/HW3/Task3/app/values.yaml  


#### 3. Install in cluster

From folder /HW/3.Kubernetes/HW3/Task3 start command

```
helm upgrade --install app app
```

Check app:
```
http://IP_kubernetes:ingress_port
```

#### 4. Uninstall app
```
helm uninstall app  
```