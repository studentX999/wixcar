<?php
class AboutController {
    public function index() {
        // Logic để lấy dữ liệu (nếu có)
        $data = [
            'title' => 'Wixcar - About Us',
            'intro' => 'Wixcar is a premier destination for luxury car enthusiasts. Founded in 2015, we specialize in offering the finest selection of high-performance vehicles from the world\'s top brands, such as Aston Martin, Pagani, and VinFast. Our mission is to connect car lovers with their dream vehicles, providing an unmatched buying experience with a focus on quality, exclusivity, and customer satisfaction.',
            'mission' => 'To deliver exceptional luxury cars with unparalleled service, ensuring every customer finds the perfect vehicle that matches their passion and lifestyle.',
            'vision' => 'To be the leading global platform for luxury car sales, setting the standard for innovation, trust, and excellence in the automotive industry.',
            'team' => [
                ['name' => 'McQueen', 'role' => 'Founder & CEO', 'image' => '../frontend/assets/images/team-member1.jpg'],
                ['name' => 'Martin', 'role' => 'Sales Director', 'image' => '../frontend/assets/images/team-member2.jpg'],
                ['name' => 'Doc Hudson', 'role' => 'Marketing Lead', 'image' => '../frontend/assets/images/team-member3.jpg'],
            ],
            'contact' => [
                'email' => 'info@wixcar.com',
                'phone' => '+84 113',
                'address' => 'Binh Thanh District, Ho Chi Minh City, Vietnam',
            ]
        ];

        // Gọi view và truyền dữ liệu
        require_once '../frontend/views/about.php';
    }
}
?>