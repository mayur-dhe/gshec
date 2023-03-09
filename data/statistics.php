
<?php
    $studentEnrolled = [
        'code' => 200,
        'data' => array(
            'title' => 'Student enrolled for various discipline',
            'source' => 'IAIMS portal',
            'x_axis_title' => 'Courses',
            'x_axis'=> array('B.Com','B.A','B.Sc','BScAGRI','BBA','BCA','BscHSC','B.Voc','BPA','FC','B.A.LLB','B.ED','B.A.BED','BPAT','B.A sanskrit','Auxiliary Nurse Midewifery(ANM)'),
            'y_axis_title' => 'Number of Students',
            'y_axis' => array(
                array(
                    'title' => '2020-2021',
                    'students' => array(11158,7234,5013,165,189,123,156,27,108,94,714,197,590,80,0,0),
                ),
                array(
                    'title' => '2021-2022',
                    'students' => array(10586,6443,4229,130,178,121,152,60,101,103  ,906,290,592,82,29,0),
                ),
            )
        ),
    ];
    // let studentEnrolled_json = <?php echo json_encode($studentEnrolled) ?>;
    <!-- let studentEnrolledData = '';
    if (studentEnrolled_json.code==200) {
      studentEnrolledData = studentEnrolled_json.data;
    }
    console.log(studentEnrolledData); -->

    $institutes = [
        'code' => 200,
        'data' => array(
            'total' => '81',
            'x_axis_title' => 'Title',
            'y_axis_title' => 'Institutes',
            'x_axis' => array('University','Academic Colleges','Technical college','Standalone institutes'),
            'y_axis' => array('3','42','19','17'),
        )
    ];

    $teacherStatistics = [
        'code' => 200,
        'data' => array(
            'title' => 'Teachers Statistics',
            'x_axis' => array('No. of Male', 'No. of Female', 'Total'),
            'y_axis' => array(
                array(
                    'title' => '2019-20',
                    'counts' => array('1772','2180','3406'),
                ),
                array(
                    'title' => '2020-21',
                    'counts' => array('1397','1716','3113'),
                ),
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
            'x_axis' => array('India', 'Goa'),
            'y_axis' => array(
                array(
                    'title' => '2015-16',
                    'counts' => array('23', '18'),
                ),
                array(
                    'title' => '2016-17',
                    'counts' => array('26', '18'),
                ),
                array(
                    'title' => '2017-18',
                    'counts' => array('29', '17'),
                ),
                array(
                    'title' => '2018-19',
                    'counts' => array('26', '16'),
                ),
                array(
                    'title' => '2019-20',
                    'counts' => array('26', '15'),
                ),
            ),

        )
    ];

?>
