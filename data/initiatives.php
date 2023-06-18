<?php
// display type 1.home on homepage, 
//              2.activity on initiatives list page   
    // title list
    $initiatives = [
        array(
            'id' => 1,
            'type' => 'home',
            'title' => 'DHE collaboration with IBM',
            'short_name' => 'IBM Initiative',
            'cover_image' => 'assets/images/empty.jpg',
        ),
        array(
            'id' => 2,
            'type' => 'home',
            'title' => 'The State Higher Education Council, Directorate of Higher Education signs a Memorandum of Understanding (MoU) with 1) NAVGURUKUL FOUNDATION FOR SOCIAL WELFARE 2)NEWTON SCHOOL 3) Be Unlu 4) Entri',
            'short_name' => 'MoU with National Startup',
            'cover_image' => 'assets/images/initiatives/initiative1 MoU.JPG',
        ),
        array(
            'id' => 3,
            'type' => 'home',
            'title' => 'Academic Interface Programme (AIP) by TCS” ',
            'short_name' => 'TCS Initiative for Banking',
            'cover_image' => 'assets/images/initiatives/Initiative 4 AIP.jpg',
        ),
        array(
            'id' => 4,
            'type' => 'home',
            'title' => 'Installation of Training, Internship and Placement (TIP) cell',
            'short_name' => 'TIP Unified Portal ',
            'cover_image' => 'assets/images/initiatives/initiative 6 TIP.jpg',
        ),
        // array(
        //     'id' => 5,
        //     'type' => 'activity',
        //     'title' => 'FDP Expertial Learning',
        //     'short_name' => 'FDP Expertial Learning',
        //     'cover_image' => 'assets/images/empty.jpg',
        // ),
        array(
            'id' => 6,
            'type' => 'activity',
            'title' => 'FDP on Banking for Business Process',
            'short_name' => 'FDP on Banking',
            'cover_image' => 'assets/images/initiatives/fdb_on_banking/FDP_group.jpg',
        ),
        array(
            'id' => 7,
            'type' => 'activity',
            'title' => 'Placement Drive at Quepem',
            'short_name' => 'Placement Drive at Quepem',
            'cover_image' => 'assets/images/initiatives/drive_at_quepem/img1.jpg',
        ),
        array(
            'id' => 8,
            'type' => 'activity',
            'title' => 'TCS Placement Drive at Borda College',
            'short_name' => 'Placement Drive at Borda',
            'cover_image' => 'assets/images/empty.jpg',
        ),
        // array(
        //     'id' => 9,
        //     'type' => 'activity',
        //     'title' => 'Vidyan Dharma',
        //     'short_name' => 'Vidyan Dharma',
        //     'cover_image' => 'assets/images/empty.jpg',
        // ),
        array(
            'id' => 10,
            'type' => 'activity',
            'title' => 'Visit to UGC and CEC',
            'short_name' => 'Visit to UGC and CEC',
            'cover_image' => 'assets/images/initiatives/ugc_and_cec/pic2.jpeg',
        ),
    ];

    $images = [
        array(
            'id' => 1,
            'title' => 'DHE',
            'short_title' => 'DHE',
            'data' => array(
                array(
                    'url' => 'assets/images/empty.jpg',
                    'alt' => '',
                ),
            ),
        ),
        array(
            'id' => 2,
            'title' => 'Memorandum of Understanding',
            'short_title' => 'MOU',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5162.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5273.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5276.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5283.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5296.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5299.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5313.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5325.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/9F4A5408.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/ALL.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/audience.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/Be Unlu.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/CM.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/CM speech.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/DHE.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/Entri.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/Group Pic.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/NavGurukul.JPG',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/mou/Newton school.JPG',
                    'alt' => '',
                ),
            ),
        ),
        array(
            'id' => 3,
            'title' => 'Academic Interface Programme',
            'short_title' => 'AIP',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/aip/img.jpg',
                    'alt' => '',
                ),
            ),
        ),
        array(
            'id' => 4,
            'title' => 'Training, Internship and Placement Cell',
            'short_title' => 'TLE Cell',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7015_C.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7023.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7046.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7063.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7101_C.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/tip/_SUN7119.jpg',
                    'alt' => '',
                ),
            ),
        ),
        // array(
        //     'id' => 5,
        //     'title' => 'FDP Expertial Learning',
        //     'short_title' => 'FDP Expertial Learning',
        //     'data' => array(
        //         // 0
        //         array(
        //             'url' => 'assets/images/empty.jpg',
        //             'alt' => '',
        //         ),
        //     ),
        // ),
        array(
            'id' => 6,
            'title' => 'FDP on Banking for Business Process',
            'short_title' => 'FDP on Banking',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/fdb_on_banking/FDP_group.jpg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/fdb_on_banking/RBI_session.jpeg',
                    'alt' => '',
                ),
            ),
        ),

        array(
            'id' => 7,
            'title' => 'Placement Drive at Quepem',
            'short_title' => 'Placement Drive at Quepem',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/drive_at_quepem/img1.jpg',
                    'alt' => '',
                ),
            ),
        ),
        array(
            'id' => 8,
            'title' => 'TCS Placement Drive at Borda College',
            'short_title' => 'Placement Drive at Borda',
            'data' => array(
                // 0
                array(
                    'url' => 'assets/images/empty.jpg',
                    'alt' => '',
                ),
            ),
        ),
        // array(
        //     'id' => 9,
        //     'title' => 'Vidyan Dharma',
        //     'short_title' => 'Vidyan Dharma',
        //     'data' => array(
        //         // 0
        //         array(
        //             'url' => 'assets/images/empty.jpg',
        //             'alt' => '',
        //         ),
        //     ),
        // ),
        array(
            'id' => 10,
            'title' => 'Visit to UGC and CEC',
            'short_title' => 'Visit to UGC and CEC',
            'data' => array(
                array(
                    'url' => 'assets/images/initiatives/ugc_and_cec/pic1.jpeg',
                    'alt' => '',
                ),
                array(
                    'url' => 'assets/images/initiatives/ugc_and_cec/pic2.jpeg',
                    'alt' => '',
                ),
            ),
        ),
    ];

    // data
    // 1
    $ibmCourses = [
        array(
            'title' => 'Role-based Skills',
            'skills' => array(
                'Customer service representative',
                'Cybersecurity professional',
                'Data analyst',
                'Linux system administrator'
            ),
            'subtitle' => 'Essential Skills',
            'essentials' => array(
                'Agile Methodology - Foundations',
                'Agile Methodology - Advanced',
                'Agile Explorer - Powered by Agile at IBM',
                'Artificial Intelligence - Foundation',
                'Artificial Intelligence - Advanced',
                'Blockchain - Foundation',
                'Blockchain - Advanced',
                'Cloud Computing - Foundation',
                'Cloud Computing - Advanced',
                'Data and Analytics - Foundation',
                'Data and Analytics - Advanced',
                'Design Thinking - Foundation',
                'Design Thinking - Advanced',
                'Digital Marketing',
                'Digital Strategy for Small Business',
                'Internet Of Things(IOT) - Foundation',
                'Internet Of Things(IOT) - Advanced',
                'Open Source Software (Technical Overviews from Red Hat)',
                'Quantum Computing - Foundation',
                'Security - Foundation',
                'Security - Advanced',
                'Working in a Digital World: Essential Skills'
            ),
        ),
        array(
            'title' => 'Professional Skills',
            'skills' => array(
                'Career Planning',
                'Career Exploration Ideas',
                'Collaboration',
                'Communication Skills',
                'Critical Thinking',
                'Decision Making',
                'Digital Literacy',
                'Entrepreneurial Mindset',
                'Explorations into Mindfulness',
                'Interpersonal Skills',
                'Leadership',
                'Mindfulness',
                'Problem Solving',
                'Professionalism at Work',
                'Project Management',
                'Resilience',
                'Virtual Teaming',
                'Working in a Digital World:Professional Skills',
            ),
            'subtitle' => 'Web Developer',
            'essentials' => array(
                'Introduction to Programming',
                'Learn HTML',
                'Learn CSS',
                'Learn JavaScript',
                'Learn GitHub',
            ),
        ),
        array(
            'title' => 'Job Readiness Skills',
            'skills' => array(
                'Develop a LinkedIn Profile',
                'Write a Good Resume',
                'Build Interview Skills',
                'Job Application Essentials',
                'Succeed at Work',
                'Search for work in Difficult Times',
                'Work From Home',
                'SkillsBuild Presents: Job Exploration Webinars',
            ),
            'subtitle' => 'Essential Skills for small business owners',
            'essentials' => array(
                'Business Fundamentals',
                'Finance Fundamentals',
                'Grow Your Business',
                'Manage Your Business',
                'Virtual Business Management',
                'Be an Entrepreneur',
                'Virtual Business Management',
                'Legal Education (United States)',
            ),
        ),
        array(
            'title' => 'Certification Preparation',
            'skills' => array(
                'Red Hat Certificate System Administrator (RHCSA)',
                'Network Security Associate Certifications: NSE 1 and NSE 2',
                'Network Security Professional Certification: NSE 4(courses and certification)',
                'Network Security Analyst Certification: NSE 5(courses and certification)',
                'Network Security Specialist Certification: NSE 6(courses and certification)',
                'Network Security Architect Certification: NSE 7(courses and certification)',
                
            ),
            'subtitle' => 'Other Courses',
            'essentials' => array(
                'BigData Foundation',
                'Applied Data Science with Python',
                'Enterprise Design Thinking Practitioner',
                'Enterprise Design Thinking Co-Creator',
                'IBM Z System Administrator: Practitioner',
                'Project Management Fundamentals',
            ),
        ),
    ];
?>