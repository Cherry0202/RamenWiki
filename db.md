# ra-men_Wiki DB

---

## user table

| _ID_ | ログイン ID | ユーザーネーム | パスワード | メールアドレス | 項目１:値段 | 項目２:量 | 項目３:こってり度 | 項目４:スープ | 項目５:具 | 項目６:麺の太さ | 追加日     | 更新日     |
| ---- | ----------- | -------------- | ---------- | -------------- | ----------- | --------- | ----------------- | ------------- | --------- | --------------- | ---------- | ---------- |
| id   | login_id    | name           | password   | mail           | price       | volume    | kotteri           | soup          | topping   | nodle_type      | created_at | updated_at |
| int  | int         | varchar        | varchar    | varchar        | int         | int       | int               | int           | int       | int             | timestamp  | timestamp  |

## chart log table

| 　ユーザ ID      | 　店舗 ID        | 項目１:値段 | 項目２:量 | 項目３:こってり度 | 項目４:スープ | 項目５:具 | 項目６:麺の太さ | 作成日     | 更新日     |
| ---------------- | ---------------- | ----------- | --------- | ----------------- | ------------- | --------- | --------------- | ---------- | ---------- |
| user_id(user.id) | wiki_id(wiki.id) | price       | amount    | kotteri           | soup          | topping   | nodle_type      | created_at | updated_at |
| int              | int              | int         | int       | int               | int           | int       | int             | timestamp  | timestamp  |

## result chart table

| ID  | お店の番号         | 値段の平均             | 量の平均                 | こってりどの平均           | スープの平均         | 具の平均                   | 麺の太さ                     | 人数   | 作成日　| 更新日 |
| --- | ------------------ | ---------------------- | ------------------------ | -------------------------- | -------------------- | -------------------------- | ---------------------------- | ------ |------ |------ |
| id  | wiki_id（wiki.id） | price(chart.price.AVG) | amount(chart.amount.AVG) | kotteri(chart.koterri.AVG) | soup(chart.soup.AVG) | topping(chart.topping.AVG) | nodle_type(chart.nodle_type.AVG) | people | created_at | updated_at |
| int | int                | float                  | float                    | float                      | float                | float                      | float                        | int    | timestmp | timestmp | 


## wiki table

| ID  | お店ID | お店名 |　本文 | 作成日 | 更新日　|
| --- | -------------- | ---------------- | ------------------ | ------ |------ |
| id  | store.store_id | store.store_name | text | created_at | updated_at |
| int | int           | varchar             |  varchar | timestamp          | timestamp |

## wiki's log table

| id  | user.id | wiki.id | created_at | updated_at |
| --- | ------- | ------- | ---------- | ---------- |


## store table

| store_id | store_name | address | open_now | phone_number | website | photo |
| -------- | ---------- | ------- | -------- | ------------ | ------- | ----- |
| int      | varchar    | varchar |          | timestamp    | Text    |

- photo は google place api の photos オブジェクトを用いてリクエストをし、帰ってきたデータを入れる

## araticle table

| id  | title | text | user_id(user.id) | created_at | updated_at | deleated_at |
| --- | ----- | ---- | ------- | ---------- | ---------- | ----------- |
| int | Text  | Text | int     | timestamp  | timestamp  | Text        |
