## documentation

# HackathonWithUs

#### register

```http
  POST /register
  Default ROLE => user
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **required, max:255**. |
| `email` | `string` | **required, email, max:255**. |
| `password` | `string` | **required, min:6**. |



#### login

```http
  POST /login
  Desponse : JWT_Token
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **required_email_exists:users,email**. |
| `password`      | `string` | **Required**. |



