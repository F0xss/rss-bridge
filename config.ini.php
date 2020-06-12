; <?php exit; ?> DO NOT REMOVE THIS LINE

[system]

; Определяет часовой пояс, используемый RSS-мостом
; Список поддерживаемых часовых поясов можно найти на
; https://www.php.net/manual/en/timezones.php
; timezone = "UTC" (default)
timezone = "Europe/Moscow"

[cache]

; Определяет тип кэша, используемого RSS-мостом
; "file" = FileCache (default)
type = "file"

; Разрешить пользователям указывать настраиваемое время ожидания для конкретных запросов.
; true  = enabled
; false = disabled (default)
custom_timeout = false

[admin]
; Рекламируйте адрес электронной почты, по которому люди могут связаться с администратором.
; Этот адрес отображается на главной странице, виден всем!
; ""    = Disabled (default)
email = ""

[proxy]

; Sets the proxy url (i.e. "tcp://192.168.0.0:32")
; ""    = Proxy disabled (default)
url = ""

; Устанавливает имя прокси, которое отображается на мосту вместо URL прокси.
; ""    = Show proxy url
name = "Hidden proxy name"

; Разрешить пользователям отключать использование прокси для определенных запросов.
; true  = enabled
; false = disabled (default)
by_bridge = false

[authentication]

; Включает аутентификацию для всех запросов к этому экземпляру RSS-Bridge.
;
; Предупреждение: вам нужно будет обновить существующие каналы после включения этой опции!
;
; true  = enabled
; false = disabled (default)
enable = false

; The username for authentication. Insert this name when prompted for login.
username = ""

; The password for authentication. Insert this password when prompted for login.
; Use a strong password to prevent others from guessing your login!
password = ""

[error]

; Определяет, как сообщения об ошибках возвращаются RSS-мостом
;
; "feed" = As part of the feed (default)
; "http" = As HTTP error message
; "none" = No errors are reported
output = "http"

; Определяет, как часто ошибка должна возникать, прежде чем она сообщается пользователю
report_limit = 1

; --- Cache specific configuration ---------------------------------------------

[SQLiteCache]
file = "cache.sqlite"

[MemcachedCache]
host = "localhost"
port = 11211
