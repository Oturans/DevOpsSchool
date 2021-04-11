## HomeWork part #2
• Deploy any Stateful application on Kubernetes as StatefulSet. If you have no ideas, you can 
use minio.  

#### 1. Requirements 
    - Kubernetes  

#### 2. Install to Kubernetes next yaml   

```
kubectl apply -f elasticsearch-pv.yaml -f elasticsearch-service.yaml -f elasticsearch-statefulset.yaml
```
I used Elasticsearch on this task.  

#### 3. Check how it works

```
kubectl get statefulsets   
```

If you want to check GUI interface you can use Kibana  

```
kubectl apply -f kibana-deployment-service.yaml
```
Check:

http://IP_kubernetes:30100


