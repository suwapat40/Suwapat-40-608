<?php

$students = [
    ['no' => 1,  'student_id' => 39694, 'prefix' => 'นางสาว', 'firstname' => 'สุวภัทร', 'lastname' => 'ปิงเมือง', 'classroom' => 'ม.6/1'],
    ['no' => 2,  'student_id' => 39695, 'prefix' => 'นาย',    'firstname' => 'ตัวอย่าง', 'lastname' => 'ข้อมูลสอง', 'classroom' => 'ม.6/1'],
    ['no' => 3,  'student_id' => 39696, 'prefix' => 'นางสาว', 'firstname' => 'ตัวอย่าง', 'lastname' => 'ข้อมูลสาม', 'classroom' => 'ม.6/1'],
];

$my_info = null;
foreach ($students as $s) {
    if ($s['firstname'] === 'สุวภัทร' && $s['lastname'] === 'ปิงเมือง') {
        $my_info = $s;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิจกรรมในชั้นเรียนที่ 5 - ข้อมูลส่วนตัว (นางสาวสุวภัทร ปิงเมือง)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div>
                    <h3 class="card-title text-success mb-1">
                        <i class="fa-solid fa-user-check me-2"></i>กิจกรรมในชั้นเรียนที่ 5: แสดงข้อมูลเฉพาะตนเอง
                    </h3>
                    <p class="mb-1"><strong>ผู้จัดทำ:</strong> นางสาวสุวภัทร ปิงเมือง (เลขที่ 1)</p>
                    <p class="mb-0">
                        <i class="fa-brands fa-github text-dark me-1"></i> <strong>GitHub Repository:</strong>
                        <a href="https://github.com/39632/afd/tree/main/a5" target="_blank" class="text-decoration-none">
                            https://github.com/39632/afd/tree/main/a5
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-info">
        <i class="fa-solid fa-circle-info me-1"></i>

    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white fw-bold">
            <i class="fa-solid fa-table me-2"></i>ข้อมูลนักเรียนเฉพาะบุคคล (Query Result)
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>เลขที่ (no)</th>
                            <th>รหัสประจำตัว</th>
                            <th>คำนำหน้า</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ชั้น/ห้อง</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($my_info): ?>
                            <tr class="text-center table-warning fw-bold">
                                <td><span class="badge bg-danger fs-6"><?php echo htmlspecialchars($my_info['no']); ?></span></td>
                                <td><?php echo htmlspecialchars($my_info['student_id']); ?></td>
                                <td><?php echo htmlspecialchars($my_info['prefix']); ?></td>
                                <td class="text-primary fs-5"><?php echo htmlspecialchars($my_info['firstname']); ?></td>
                                <td class="text-primary fs-5"><?php echo htmlspecialchars($my_info['lastname']); ?></td>
                                <td><?php echo htmlspecialchars($my_info['classroom']); ?></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center text-danger py-4">ไม่พบข้อมูลนักเรียน</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
