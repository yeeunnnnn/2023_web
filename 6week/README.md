#6week

---

### php 1번
http://sugh002.dothome.co.kr/php1.php
### php 2번
http://sugh002.dothome.co.kr/php2.php
### php 3번
http://sugh002.dothome.co.kr/php3.php




### 1. 동적 웹페이지와 정적인 웹페이지의 차이
- **정적인 웹페이지:** HTML, CSS, JavaScript 등으로 만들어지며, 서버는 사용자의 요청에 따라 항상 동일한 페이지를 제공합니다.
- **동적인 웹페이지:** PHP, ASP, JSP 등의 서버 사이드 스크립트를 통해 생성됩니다.
이 경우, 사용자의 입력이나 외부 데이터에 따라 페이지의 내용이 변경될 수 있습니다.

### 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지
- PDO, MySQLi, GD, mbstring, XML, SimpleXML, json, curl, openssl, zlib, Phar, calendar, ftp, gettext, iconv, SOAP, SQLite3, xmlrpc, intl, exif

### 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오
- PHP에서 사용되는 스크립트 엔진은 Zend 엔진입니다.
Zend 엔진은 PHP의 핵심 부분으로, PHP 코드를 분석하고 실행하는 역할을 합니다.
Zend 엔진은 PHP 코드를 중간 코드로 컴파일하고, 이를 실행하여 웹 서버에 결과를 반환합니다.
### 4. 웹브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때 서버는 어떤 일을 수행하는지
- 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 웹 서버는 먼저 해당 URL에 대한 요청을 받아들입니다.
그 후, 서버는 요청받은 URL의 경로에 따라 해당 PHP 파일을 찾습니다.
찾은 PHP 파일을 PHP 스크립트 엔진인 Zend 엔진이 처리하여 HTML 코드를 생성하고, 이를 웹 서버를 통해 사용자에게 전달합니다.
### 5. call by value와 call by reference의 차이점
- call by value와 call by reference의 차이점은 함수에 인자를 전달하는 방식에 있습니다.
call by value는 값을 복사하여 함수에 전달한다는 의미입니다.
즉, 원래의 변수와는 별개의 메모리 공간에 값이 저장됩니다.
따라서 함수 내에서 인자 값을 변경해도 원래의 변수 값은 변하지 않습니다.
반면에 call by reference는 변수의 주소를 전달하여 원래의 변수 자체를 함수에 전달한다는 의미입니다.
따라서 함수 내에서 인자 값을 변경하면 원래의 변수 값도 변경됩니다.
```php
   function increment($num) {
    $num++;
    echo $num;
   }

   $value = 5;
   increment($value); // 출력: 6
   echo $value; // 출력: 5
   ```
   ```php
   function incrementByReference(&$num) {
       $num++;
       echo $num;
   }

   $value = 5;
   incrementByReference($value); // 출력: 6
   echo $value; // 출력: 6
   ```