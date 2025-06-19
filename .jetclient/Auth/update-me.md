```toml
name = 'update-me'
method = 'POST'
url = '{{baseURL}}/update-me'
sortWeight = 6000000
id = 'c4f0d0bb-1dab-46b8-9e64-a257d8ba12d9'

[[headers]]
key = 'Content-Type'
value = 'application/json'
disabled = true

[[headers]]
key = 'Accept'
value = 'application/json'

[auth.bearer]
token = '{{token}}'

[[body.formData]]
type = 'FILE'
key = 'photo'

[[body.formData]]
key = 'first_name'
value = 'Alo bRasil'
disabled = true
```
