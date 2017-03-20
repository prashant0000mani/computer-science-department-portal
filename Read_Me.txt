Incase of Having Problem Importing the Database

;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;Database Name : csdp      ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;

;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;	Tables in csdp     ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;
              	
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; 	admin_master             ;;
;; 	ebook_master             ;;
;; 	faculty_master           ;;
;; 	faculty_personal_master  ;;
;;	login_master             ;;
;; 	notice_master            ;;
;; 	student_academic_master  ;;
;; 	student_master           ;;
;; 	student_personal_master  ;;
;;	student_technical_master ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;   Columns in admin_master ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| userid   | varchar(50) | NO   | MUL | NULL    |       |
| joinyear | int(11)     | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;   Columns in ebook_master ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| userid   | varchar(50)  | NO   | MUL | NULL    |       |
| bookname | varchar(50)  | NO   |     | NULL    |       |
| path     | varchar(250) | YES  |     | NULL    |       |
+----------+--------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;   Columns in faculty_master ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| userid     | varchar(50) | NO   | MUL | NULL    |       |
| department | varchar(30) | YES  |     | NULL    |       |
| degree     | varchar(10) | YES  |     | NULL    |       |
| joinyear   | int(11)     | YES  |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;   Columns in faculty_personal_master ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+--------+---------------+------+-----+---------+-------+
| Field  | Type          | Null | Key | Default | Extra |
+--------+---------------+------+-----+---------+-------+
| userid | varchar(50)   | NO   | MUL | NULL    |       |
| name   | varchar(30)   | YES  |     | NULL    |       |
| dob    | date          | YES  |     | NULL    |       |
| gender | varchar(6)    | YES  |     | NULL    |       |
| mobile | decimal(10,0) | YES  |     | NULL    |       |
+--------+---------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;       Columns in login_master        ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| userid   | varchar(50) | NO   | PRI | NULL    |       |
| password | varchar(32) | YES  |     | NULL    |       |
| status   | varchar(5)  | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;       Columns in notice_master        ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| userid     | varchar(50)  | NO   | MUL | NULL    |       |
| title      | varchar(50)  | NO   | PRI |         |       |
| content    | varchar(250) | YES  |     | NULL    |       |
| type       | varchar(8)   | YES  |     | NULL    |       |
| dateissued | date         | YES  |     | NULL    |       |
| docpath    | varchar(10)  | YES  |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;  Columns in student_academic_master   ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| userid     | varchar(50)  | NO   | MUL | NULL    |       |
| acdachvmt  | varchar(150) | YES  |     | NULL    |       |
| sports     | varchar(150) | YES  |     | NULL    |       |
| cultural   | varchar(150) | YES  |     | NULL    |       |
| others     | varchar(150) | YES  |     | NULL    |       |
| graduation | int(11)      | YES  |     | NULL    |       |
| inter      | int(11)      | YES  |     | NULL    |       |
| highschool | int(11)      | YES  |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;       Columns in student_master       ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| userid   | varchar(50) | NO   | MUL | NULL    |       |
| roll     | int(11)     | YES  |     | NULL    |       |
| batch    | int(11)     | YES  |     | NULL    |       |
| branch   | varchar(30) | YES  |     | NULL    |       |
| degree   | varchar(10) | YES  |     | NULL    |       |
| joinyear | int(11)     | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;  Columns in student_personal_master   ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+---------+---------------+------+-----+---------+-------+
| Field   | Type          | Null | Key | Default | Extra |
+---------+---------------+------+-----+---------+-------+
| userid  | varchar(50)   | NO   | MUL | NULL    |       |
| name    | varchar(30)   | YES  |     | NULL    |       |
| dob     | date          | YES  |     | NULL    |       |
| gender  | varchar(6)    | YES  |     | NULL    |       |
| address | varchar(100)  | YES  |     | NULL    |       |
| mobile  | decimal(10,0) | YES  |     | NULL    |       |
+---------+---------------+------+-----+---------+-------+

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;  Columns in student_technical_master  ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

+-----------------+--------------+------+-----+---------+-------+
| Field           | Type         | Null | Key | Default | Extra |
+-----------------+--------------+------+-----+---------+-------+
| userid          | varchar(50)  | NO   | MUL | NULL    |       |
| prgmlanguage    | varchar(50)  | YES  |     | NULL    |       |
| databasekwn     | varchar(50)  | YES  |     | NULL    |       |
| os              | varchar(50)  | YES  |     | NULL    |       |
| software        | varchar(50)  | YES  |     | NULL    |       |
| otherskill      | varchar(150) | YES  |     | NULL    |       |
| industryexp     | varchar(150) | YES  |     | NULL    |       |
| academicproject | varchar(50)  | YES  |     | NULL    |       |
+-----------------+--------------+------+-----+---------+-------+

		...SORRY FOR THE INCONVENIENCE...