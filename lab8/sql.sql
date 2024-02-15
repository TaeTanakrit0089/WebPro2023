CREATE TABLE department
(
    dept_name VARCHAR(50) PRIMARY KEY,
    building  VARCHAR(50),
    budget    DECIMAL(12, 2)
);

CREATE TABLE student
(
    id        INT PRIMARY KEY,
    name      VARCHAR(50),
    dept_name VARCHAR(50),
    tot_cred  INT,
    FOREIGN KEY (dept_name) REFERENCES department (dept_name)
);

CREATE TABLE instructor
(
    id        INT PRIMARY KEY,
    name      VARCHAR(50),
    dept_name VARCHAR(50),
    salary    DECIMAL(12, 2),
    FOREIGN KEY (dept_name) REFERENCES department (dept_name)
);

CREATE TABLE advisor
(
    s_id INT PRIMARY KEY,
    i_id INT,
    FOREIGN KEY (s_id) REFERENCES student (id),
    FOREIGN KEY (i_id) REFERENCES instructor (id)
);

CREATE TABLE course
(
    course_id VARCHAR(50) PRIMARY KEY,
    title     VARCHAR(100),
    dept_name VARCHAR(50),
    credits   INT,
    FOREIGN KEY (dept_name) REFERENCES department (dept_name)
);

CREATE TABLE prereq
(
    course_id INT PRIMARY KEY,
    prereq_id INT,
    FOREIGN KEY (course_id) REFERENCES course (course_id),
    FOREIGN KEY (prereq_id) REFERENCES course (course_id)
);

CREATE TABLE classroom
(
    building    VARCHAR(50) primary key,
    room_number INT,
    capacity    INT
);

CREATE TABLE time_slot
(
    time_slot_id int primary key,
    day          varchar,
    start_time   time,
    end_time     time
);

create table section
(
    course_id    int,
    sec_id       int,
    semester     varchar,
    year         int,
    building     varchar,
    room_number  int,
    time_slot_id int,
    primary key (course_id),
    foreign key (course_id) references course (course_id),
    foreign key (building, room_number) references classroom (building, room_number),
    foreign key (time_slot_id) references time_slot (time_slot_id)
);

create table takes
(
    id        int,
    course_id varchar(50),
    sec_id    int,
    semester  varchar,
    year      int,
    grade     varchar default null,

    primary key (id, course_id, sec_id),

    foreign key (id) references student (id),
    foreign key (course_id) references section (course_id)
);

create table teaches
(
    id        int,
    course_id varchar(50),
    sec_id
)