# HoloTravel
연습중  .  .  .

---
### 개발스택

언어 : PHP

프레임워크 : Laravel

IDE : Visual Studio Code

DB : SQlite

---
#### ***2025.06.20***

DB에 데이터 조회/ 삽입 성공

### ***Q. 어떻게 터미널만으로 DB 구조를 확인할 수 있을까?***

> ##  php artisan tinker

> ## DB::select('SELECT name FROM sqlite_master WHERE type = "table"');

### ***Q. 특정 테이블의 검색은 어떻게?***

> ## php artisan tinker

> ## DB::table('테이블명')->get();

### ***Q. Laravel에서의 인자값 넘기기***

## 스프링과 비슷하게 컨트롤러부분에서 Model에 해당하는 부분을 직접 선언 후 

## compact에 넣음으로써 블레이드 템플릿에서는 items, 라는 값으로 받을 수 있게 됨.

```
        public function indexview(){        
                $items = products::all();
                return view('main',compact('items'));
        }
```


### 순서 
> 1. .env파일에 DB경로를 설정
> 2. Migration폼 작성
> 3. php artisan  db:seed
> 4. 
   
