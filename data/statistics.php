<?php
    $studentEnrolled = [
        'code' => 200,
        'data' => array(
            'title' => 'Student enrolled for various discipline',
            'source' => 'IAIMS portal',
            'x_axis_title' => 'Courses',
            'x_axis'=> array('B.Com','B.A','B.Sc','BScAGRI','BBA','BCA','BscHSC','B.Voc','BPA','FC','B.A.LLB','B.ED','B.A.BED','BPAT','B.A sanskrit','ANM'),
            'x_axis_full'=> array('B.Com','B.A','B.Sc','BScAGRI','BBA','BCA','BscHSC','B.Voc','BPA','FC','B.A.LLB','B.ED','B.A.BED','BPAT','B.A sanskrit','Auxiliary Nurse Midewifery(ANM)'),
            'y_axis_title' => 'Number of Students',
            'y_axis' => array(
                array(
                    'bgColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'title' => '2020-2021',
                    'students' => array(11158,7234,5013,165,189,123,156,27,108,94,714,197,590,80,0,0),
                ),
                array(
                    'bgColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
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
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ),
            'borderColor' => array(
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ),
        )
    ];

    $teacherStatistics = [
        'code' => 200,
        'data' => array(
            'title' => 'Teachers Statistics',
            'x_axis' => array('2019-20', '2020-21'),
            'y_axis' => array(
                array(
                    'label' => 'Male',
                    'data' => array('1772','1397'),
                    'bgColor' => 'rgba(54, 162, 235, 0.5)',
                ),
                array(
                    'label' => 'Female',
                    'data' => array('2180','1716'),
                    'bgColor' => 'rgba(255, 99, 132, 0.5)',
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
            'x_axis' => array('Universities with level wise', 'Enrollment in the University', 'Enrollment in the standalone institutes', 'Enrollment in the technical institutes ','Enrollment in the academic colleges'),
            'y_axis' => array(
                // array(
                //     'title' => '2019-20',
                //     'counts' => array(
                //         array('male' => '0', 'female' => '0'),
                //         array('male' => '0', 'female' => '0'),
                //         array('male' => '0', 'female' => '0'),
                //         array('male' => '0', 'female' => '0'),
                //         array('male' => '0', 'female' => '0'),
                //     ),
                // ),
                array(
                    'title' => '2020-21',
                    'counts' => array(
                        array('male' => '1914', 'female' => '1856'),
                        array('male' => '878', 'female' => '1597'),
                        array('male' => '5999', 'female' => '1851'),
                        array('male' => '5221', 'female' => '4339'),
                        array('male' => '5221', 'female' => '4339'),
                    ),
                ),
            ),
        )
    ];

    $pupilTeacherRatio = [
        'code' => 200,
        'data' => array(
            'title' => 'Pupil Teacher Ratio',
            'source' => 'AISHE',
            // 'x_axis' => array('2015-16','2016-17','2017-18','2018-19','2019-20'),
            'x_axis' => array('2015','2016','2017','2018','2019'),
            'y_axis' => array(
                array(
                    'label' => 'India',
                    'bgColor' => 'rgba(255, 99, 132, 0.5)',
                    'count' => array('23', '26', '29', '26', '26'),
                ),
                array(
                    'label' => 'Goa',
                    'color' => 'rgba(54, 162, 235, 0.5)',
                    'count' => array('18', '18', '17','16', '15'),
                ),
            ),

        )
    ];

?>