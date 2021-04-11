## HomeWork part #1
• Create namespace monitoring   
• Create service account grabber in that namespace  
• Create role that can get, list, watch on all Pods in t he cluster  

#### 1. Requirements 
    - Kubernetes  
    
#### 2. Install to Kubernetes next yaml

```
 kubectl apply -f monitoring.yml
```

#### 3. Check how it works
```
kubectl get namespace | grep monitoring  
kubectl get sa -n monitoring | grep grabber
kubectl get namespace,sa,clusterrole,clusterrolebinding | grep grabber
```
