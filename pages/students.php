<?php include "../components/header.php"; ?>

<?php
    $students = [
        [
            'id' => 1,
            'name' => "احمد",
            'class' => "الاولى",
            'degree' => "40"
        ],
        [
            'id' => 2,
            'name' => "ابراهيم",
            'class' => "الاولى",
            'degree' => "60"
        ],
        [
            'id' => 3,
            'name' => "عبد الرحمن",
            'class' => "الاولى",
            'degree' => "100"
        ],
        [
            'id' => 4,
            'name' => "حسام",
            'class' => "الاولى",
            'degree' => "30"
        ],
        [
            'id' => 5,
            'name' => "حسام",
            'class' => "الاولى",
            'degree' => "70"
        ],
        [
            'id' => 6,
            'name' => "حسام",
            'class' => "الاولى",
            'degree' => "20"
        ],
    ]
?>

<div class="students-page">
    <h1>جدول الطلاب</h1>
    <div class="search">
        <input type="text" placeholder="...بحث">
    </div>
    <div class="table">
        <div class="th">
            <p>رقم تسلسلي</p>
            <p>الإسم</p>
            <p>الفرقة</p>
            <p>الدرجة</p>
        </div>

        <?php foreach($students as $student) : ?>
            <div class="tr">
                <p><?= $student['id'] ?></p>
                <p><?= $student['name'] ?></p>
                <p><?= $student['class'] ?></p>
                <?php if($student['degree'] < 50) : ?>
                    <p style="color: red;"><?= $student['degree'] ?></p>
                <?php else : ?>
                    <p style="color: green;"><?= $student['degree'] ?></p>
                <? endif ?> 
            </div>
        <?php endforeach; ?>

        <!-- <div class="tr">
            <p>1</p>
            <p>محمد</p>
            <p>الاولى</p>
            <p>40%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div>
        <div class="tr">
            <p>2</p>
            <p>احمد</p>
            <p>الاولى</p>
            <p>50%</p>
        </div> -->
    </div>
</div>


<?php include "../components/footer.php"; ?>