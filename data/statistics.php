<?php
    $studentEnrolled = [
        'code' => 200,
        'data' => array(
            'title' => 'Student enrolled for various discipline',
            'x_axis_title' => 'Courses (IAIMS portal)',
            'y_axis_title' => 'Number of Students Enrollment',
            'x_axis'=> array('B.Com','B.A','B.Sc','BScAGRI','BBA','BCA','BscHSC','B.Voc','BPA','FC','B.A.LLB','B.ED','B.A.BED','BPAT','B.A sanskrit','ANM'),
            'x_axis_full'=> array('B.Com','B.A','B.Sc','BScAGRI','BBA','BCA','BscHSC','B.Voc','BPA','FC','B.A.LLB','B.ED','B.A.BED','BPAT','B.A sanskrit','Auxiliary Nurse Midewifery(ANM)'),
            'y_axis' => array(
                array(
                    'bgColor' => '#ec2130',
                    'borderColor' => '#ec2130',
                    'title' => '2020-2021',
                    'students' => array(11158,7234,5013,165,189,123,156,27,108,94,714,197,590,80,0,0),
                ),
                array(
                    'bgColor' => '#2b4655',
                    'borderColor' => '#2b4655',
                    'title' => '2021-2022',
                    'students' => array(10586,6443,4229,130,178,121,152,60,101,103,906,290,592,82,29,0),
                ),
            )
        ),
    ];

    $institutes = [
        'code' => 200,
        'data' => array(
            'title' => 'Institutes',
            'x_axis_title' => 'Title',
            'total' => '81',
            'x_axis' => array('University','Academic Colleges','Technical college','Standalone institutes'),
            'y_axis' => array('3','42','19','17'),
            'bgColor' => array(
                '#f9cb34',
                '#eb6742',
                '#00a390',
                '#315470',
            ),
            'borderColor' => array(
                '#f9cb34',
                '#eb6742',
                '#00a390',
                '#315470',
            ),
        )
    ];

    $teacherStatistics = [
        'code' => 200,
        'data' => array(
            'title' => 'Teachers Statistics',
            'x_axis' => array('2019-20', '2020-21'),
            'y_axis_max_range' => '4500',
            'y_axis' => array(
                array(
                    'label' => 'Male',
                    'data' => array('1772','1397'),
                    'bgColor' => '#eb6742',
                ),
                array(
                    'label' => 'Female',
                    'data' => array('2180','1716'),
                    'bgColor' => '#ff9b00',
                ),
                // array(
                //     'label' => 'Total',
                //     'data' => array('3406','3113'),
                //     'bgColor' => 'rgba(255, 99, 132, 0.5)',
                // ),
            ),
        )
    ];

    $studentEnrollmentDetails = [
        'code' => 200,
        'data' => array(
            'title' => 'Student Enrollment Details',
            'x_axis_title' => 'Students Enrolled in Higher Education (AISHE)',
            'y_axis_title' => 'Number of Students',
            'x_axis' => array('University', 'Universities with level wise', 'Standalone Institutes', 'Technical Institutes ','Academic Colleges'),
            'y_axis_max_range' => '7000',
            'y_axis' => array(
                array(
                    'title' => '2020-21',
                    'label' => 'Male',
                    'data' => array('878','1914','5999','5221','5221'),
                    'radius' => array('10','10','10','10','10'),
                    'bgColor' => '#315470',
                    'borderColor' => '#315470',
                ),
                array(
                    'title' => '2020-21',
                    'label' => 'Female',
                    'data' => array('1597','1856','1851','4339','4339'),
                    'radius' => array('10','10','10','10','10'),
                    'bgColor' => '#fb7f00',
                    'borderColor' => '#fb7f00',
                ),
            ),
        )
    ];

    $pupilTeacherRatio = [
        'code' => 200,
        'data' => array(
            'title' => 'Pupil Teacher Ratio',
            'x_axis_title' => 'Year (AISHE)',
            'y_axis_title' => 'Number of Teachers',
            'x_axis' => array('2015-16','2016-17','2017-18','2018-19','2019-20'),
            'y_axis' => array(
                array(
                    'label' => 'India',
                    'count' => array('23', '26', '29', '26', '26'),
                    'bgColor' => '#122d4d',
                    'borderColor' => '#122d4dd4',
        
                ),
                array(
                    'label' => 'Goa',
                    'count' => array('18', '18', '17','16', '15'),
                    'bgColor' => '#da0000',
                    'borderColor' => '#da0000ad',
                ),
            ),

        )
    ];

?>