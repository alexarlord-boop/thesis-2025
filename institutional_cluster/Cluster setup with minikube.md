# Cluster setup with minikube

## Prerequisites

- [minikube](https://minikube.sigs.k8s.io/docs/start/)
- [kubectl](https://kubernetes.io/docs/tasks/tools/install-kubectl/)
- [helm](https://helm.sh/docs/intro/install/)
- [docker](https://docs.docker.com/get-docker/)
- [jq](https://stedolan.github.io/jq/download/)
<!-- - [kustomize](https://kubectl.docs.kubernetes.io/installation/kustomize/) -->
- [kubeseal]

```bash
# minikube start --cpus 4 --memory 8192 --disk-size 50g

minikube addons enable ingress
# minikube addons enable metrics-server
# minikube addons enable registry
```

# Test Basic Networking with a Dummy Service

```bash
# mind ports, tunnel, and ingress addon
kubectl apply -f deployment.yaml
kubectl apply -f ingress.yaml
minikube tunnel
```

# Creating helm chart

```bash
helm create institutional-chart
```

# Package helm chart

```bash
helm package institutional-chart
```

# Install/uninstall helm chart

```bash
helm install institutional institutional-chart
helm uninstall institutional
```

Chart.yaml
Update the Chart.yaml file with the appropriate metadata.


values.yaml
Update the values.yaml file with the default values for your deployments and services.


deployment.yaml
Update the deployment.yaml file to create the Nginx deployments.


service.yaml
Update the service.yaml file to create the Nginx services.


ingress.yaml
Update the ingress.yaml file to create the Ingress resource.


# Lint the Helm chart
helm lint /Users/rert0/Desktop/ti-wizard/keycloak_chart

# Install the Helm chart
helm install keycloak /Users/rert0/Desktop/ti-wizard/keycloak_chart

# Check the status of deployments and pods
kubectl get deployments
kubectl get pods

# Check pod logs
kubectl logs <pod-name>

# Verify services
kubectl get services

# Verify Ingress
kubectl get ingress

# Check Ingress Controller logs
kubectl logs -n kube-system $(kubectl get pods -n kube-system | grep nginx-ingress-controller | awk '{print $1}')

# Uninstall the Helm chart
helm uninstall keycloak