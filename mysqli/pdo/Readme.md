# PDO (PHP Data Object) - Definição #

PDO_MYSQL é um driver que implementa a interface PHP Data Objects (PDO) - [Manual PHP - Introdução PDO](http://www.php.net/manual/pt_BR/intro.pdo.php) para acesso do PHP ao MySQL 3.x, 4.x and 5.x.

PDO_MYSQL tem vantagens do nativo suporte a prepared statement presente no MySQL 4.1 e superior. Se você está usando um versão antiga da biblioteca do mysql client, PDO irá emular para você.

[Manual PHP - PDO MySql](http://php.net/manual/pt_BR/ref.pdo-mysql.php)

A utilização do PDO fornece uma camada de abstração em relação a conexão com o banco de dados visto que o PDO efetua a conexão com diversos bancos de dados da mesma maneira, modificando apenas a sua string de conexão.



### por que tenho que usar a variável $stmt como objeto para chamar alguns métodos ? ###
### não daria de chamar os metodos (**bindParam, execute...**) direto no objeto **$conn** ? ###

A variável ```$stmt```  é necessária pois ela representa uma declaração ou query da conexão

Para entender melhor, imagine que $conn  é a responsável pela conexão em si

Entretanto, quando queremos realizar alguma ação específica da conexão, preparamos uma query e a atribuímos a ```$stmt```, que passa a representar a transação

Assim, quando dizemos ```$stmt->bindParam()``` ou ```$stmt->execute()```, estamos, na realidade, dizendo para ser feita uma conexão no banco de dados e ser realizada alguma ação e não precisamos executar ```$conn->execute()``` pois ela já está representada por ```$stmt``` 

```$stmt```  também é útil pois, se queremos realizar outra consulta, basta criar outra variável, ```$stmt2```, por exemplo, e preparar a query da conexão



# beginTransaction(); #

Desativa o modo de envio automático. Enquanto o modo de envio automático estiver desativado, modificações feitas no banco de dados por meio da instância do objeto PDO não serão enviadas até que você finalize a transação chamando ```PDO::commit().``` Chamar ```PDO::rollBack()``` reverterá todas as alterações no banco de dados e retornará a conexão para o modo de envio automático.

Alguns bancos de dados, incluindo o **MySQL**, emitem automaticamente um **COMMIT** implícito quando uma instrução de linguagem de definição de banco de dados (**DDL**) como **DROP TABLE** ou **CREATE TABLE** é emitida em uma transação. O **COMMIT** implícito impedirá que você reverta quaisquer outras alterações dentro do limite da transação.

## Valor Retornado ##
Retorna **true** em caso de sucesso ou **false** em caso de falha.

## Erros ##
Lança uma **PDOException** se já houver uma transação iniciada ou se o driver não suportar transações.

### Nota: Uma exceção é lançada mesmo quando o atributo ```PDO::ATTR_ERRMODE``` não está definido para ```PDO::ERRMODE_EXCEPTION.``` ###