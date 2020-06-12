; <?php exit; ?> DO NOT REMOVE THIS LINE

; This file contains the default settings for RSS-Bridge. Do not change this
; file, it will be replaced on the next update of RSS-Bridge! You can specify
; your own configuration in 'config.ini.php' (copy this file).

[system]

; Определяет часовой пояс, используемый RSS-мостом
; Список поддерживаемых часовых поясов можно найти на
; https://www.php.net/manual/en/timezones.php
; timezone = "UTC" (default)
timezone = "UTC +3"

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

; Allow users to disable proxy usage for specific requests.
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

; Defines how error messages are returned by RSS-Bridge
;
; "feed" = As part of the feed (default)
; "http" = As HTTP error message
; "none" = No errors are reported
output = "feed"

; Определяет, как часто ошибка должна возникать, прежде чем она сообщается пользователю
report_limit = 1

; --- Cache specific configuration ---------------------------------------------

[SQLiteCache]
file = "cache.sqlite"

[MemcachedCache]
host = "localhost"
port = 11211
