# ra-men_Wiki DB せっけ--

---

## user table

| _ID_ | ユーザーネーム | パスワード | メールアドレス | 項目１:値段 | 項目２:量 | 項目３:こってり度 | 項目４:スープ | 項目５:具 | 項目６:麺の太さ | 追加日     | 更新日     |
| ---- | -------------- | ---------- | -------------- | ----------- | --------- | ----------------- | ------------- | --------- | --------------- | ---------- | ---------- |
| id   | name           | password   | mail           | price       | volume    | kotteri           | soup          | topping   | nodle_type      | created_at | updated_at |
| int  | varchar        | varchar    | varchar        | varchar     | int       | int               | int           | int       | int             | int        | timestamp  | timestamp |

## chart_log table

| ID  | 　ユーザ ID      | 　店舗 ID        | 項目１:値段 | 項目２:量 | 項目３:こってり度 | 項目４:スープ | 項目５:具 | 項目６:麺の太さ | 作成日     | 更新日     |
| --- | ---------------- | ---------------- | ----------- | --------- | ----------------- | ------------- | --------- | --------------- | ---------- | ---------- |
| id  | user_id(user.id) | wiki_id(wiki.id) | price       | amount    | kotteri           | soup          | topping   | nodle_type      | created_at | updated_at |
| int | int              | int              | int         | int       | int               | int           | int       | int             | timestamp  | timestamp  |

## result_chart table

| ID  | お店の番号         | 値段の平均                 | 量の平均                     | こってりどの平均               | スープの平均             | 具の平均                       | 麺の太さ                             | 人数       | 作成日　   | 更新日     |
| --- | ------------------ | -------------------------- | ---------------------------- | ------------------------------ | ------------------------ | ------------------------------ | ------------------------------------ | ---------- | ---------- | ---------- |
| id  | wiki_id（wiki.id） | avg_price(chart.price.AVG) | avg_amount(chart.amount.AVG) | avg_kotteri(chart.koterri.AVG) | avg_soup(chart.soup.AVG) | avg_topping(chart.topping.AVG) | avg_nodle_type(chart.nodle_type.AVG) | sum_people | created_at | updated_at |
| int | int                | float                      | float                        | float                          | float                    | float                          | float                                | int        | timestmp   | timestmp   |

## wiki table

| ID  | お店 ID        | お店名           | 本文    | お店のユーザの合計値 | 作成日     | 更新日　   |
| --- | -------------- | ---------------- | ------- | -------------------- | ---------- | ---------- |
| id  | store.store_id | store.store_name | text    | user_history.id(sum) | created_at | updated_at |
| int | int            | varchar          | varchar | int                  | timestamp  | timestamp  |

## wiki's_log table

| ウィキ ID | ユーザ ID | created_at | updated_at |
| --------- | --------- | ---------- | ---------- |
| wiki.id   | user.id   | created_at | updated_at |
| int       | int       | timestamp  | timestamp  |

## store table

| お店 ID  | お店名     | 住所    | 営業中   | 電話番号     | ウェブサイト | 写真    | 作成日     | 更新日     |
| -------- | ---------- | ------- | -------- | ------------ | ------------ | ------- | ---------- | ---------- |
| store_id | store_name | address | open_now | phone_number | website      | photo   | created_at | updated_at |
| int      | varchar    | varchar | int      | char         | varchar      | varchar | timestamp  | timestmp   | timestmp |

-   photo は google place api の photos オブジェクトを用いてリクエストをし、帰ってきたデータを入れる

## review table

| ID  | チャートログ ID | 本文    | 画像    | ユーザ ID | 　作成日   | 更新日     | 削除日      |
| --- | --------------- | ------- | ------- | --------- | ---------- | ---------- | ----------- |
| id  | chart_log.id    | text 　 | image   | user.id   | created_at | updated_at | deleated_at |
| int | int             | varchar | varchar | int       | timestamp  | timestamp  | timestamp   |

## user(store) history

ユーザが行ったことあるお店の log

| ID  | 店舗 ID  | 　作成日   |
| --- | -------- | ---------- |
| id  | store.id | created_at |
| int | int      | timestamp  |
