# (Arquivo CSV)[https://medium.com/mestredev/leitura-de-arquivos-csv-com-php-33819d78d03b] # - Arquivo formatado
O formato CSV é um tipo de arquivo de texto fundamental para transferência de informações entre aplicativos diferentes, como uma plataforma CRM e o Microsoft Excel. Para fazer esse tipo de troca de informações com sucesso, você precisa saber como importar e exportar esses arquivos. Tem dúvidas de como fazer isso? Então continue lendo este post!

<---------------------------------------------------------------->

# (fopen)[https://www.php.net/manual/pt_BR/function.fopen.php] #

(PHP 4, PHP 5, PHP 7, PHP 8)

fopen — Abre um arquivo ou URL
Descrição:
```
fopen (
    string $filename,
    string $mode,
    bool $use_include_path = ?,
    resource $context = ?
): resource
```

```fopen()``` conecta um recurso nomeado, especificado por filename, a um stream.
Parâmetros:
## filename ##

    Se filename estiver na forma de "scheme://...", é assumido que seja uma URL, e o PHP buscará por um manipulador de protocolo (também conhecido como wrapper) para aquele scheme. Se nenhum wrapper para aquele protocolo estiver registrado, o PHP emitirá um aviso para ajudá-lo a rastrear potenciais problemas no seu script, e então continuará presumindo que filename especifica um nome de arquivo.

    Se o PHP decidiu que filename se refere a um arquivo local, então ele tentará abrir um stream para aquele arquivo. O arquivo precisa ser acessível pelo PHP, então você precisa assegurar que as permissões de acesso do arquivo permitem este acesso. Se você tiver ativado safe mode ou open_basedir, outras restrições podem se aplicar.

    Se o PHP decidiu que filename se refere a um protocolo registrado e esse protocolo estiver registrado como um protocolo de rede, o PHP irá verificar para ter certeza que allow_url_fopen está ativado. Se estiver desligado, o PHP emitirá um alerta e a chamada ao fopen irá falhar. 