***

# Conectar ao banco

```
$host = "localhost";
$db_name = "nome do seu banco";
$user = "root";
$password = "";  // Deixe em branco se não houver senha
```

![image](https://github.com/user-attachments/assets/28462273-c8cc-4feb-8ea5-146268010ae0)

# Script de Conexão

```diff
+ $conn = new PDO("mysql:host= $host;dbname= $db_name", "$user","$password");
- $conn = new mysqli($host, $user, $password, $db_name);
```

***

## FIGMA

https://www.figma.com/design/SRibJZ5WR4mk79x7D000pv/pi?node-id=8-99&t=QGO40peErVE5w9sS-0


## Projeto ON-LINE

https://buildsburguer.paulowh.com
