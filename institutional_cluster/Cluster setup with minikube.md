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

# Enable SSL/TLS with a Self-Signed Certificate

> Install cert-manager

```bash

kubectl apply -f https://github.com/jetstack/cert-manager/releases/latest/download/cert-manager.yaml
kubectl get pods -n cert-manager
```

<!-- > Create a self-signed TLS cert with [ClusterIssuer](issuer.yaml) -->

> Configuring SSL for Kubernetes Ingress Controller
1. certs
```bash
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout tls.key -out tls.crt -subj "/CN=ingress.minikube.local"
```
1. use them in tls secret 
```bash
kubectl create secret tls ingress-tls  --key=tls.key --cert=tls.crt -n ingress-nginx
```
1. Configure Ingress Controller to Use TLS
```bash
kubectl patch deployment ingress-nginx-controller -n ingress-nginx --type='json' -p='[{"op": "add", "path": "/spec/template/spec/containers/0/args/-", "value":"--default-ssl-certificate=ingress-nginx/ingress-tls"}]'
```

Edit hosts file
```bash
echo "$(minikube ip) ingress.minikube.local" | sudo tee -a /etc/hosts
```


Getting nginx ingress http and https endpoints
```bash
minikube service ingress-nginx-controller -n ingress-nginx --url
```