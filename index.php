<?php
// ====== แก้ไขข้อมูลของคุณที่นี่ ======
$profile = [
  'name'   => 'ชื่อ นามสกุล',
  'title'  => 'Web Developer | System Designer',
  'photo'  => 'profile.jpg', // วางรูปโปรไฟล์ไว้โฟลเดอร์เดียวกับไฟล์นี้
  'info'   => [
    'อายุ'     => '00 ปี',
    'อีเมล'    => 'your@email.com',
    'โทรศัพท์' => '0XX-XXX-XXXX',
    'ที่อยู่'    => 'จังหวัด, ประเทศไทย',
    'การศึกษา' => 'ชื่อสถาบัน / สาขา',
  ],
];

$tools = [
  ['Visual Studio Code', 'https://code.visualstudio.com'],
  ['XAMPP - phpMyAdmin', ''],
  ['Microsoft Word', ''],
  ['Figma', ''],
  ['Canva', ''],
  ['ฯลฯ', ''],
];

$abilities = [
  'วางแผนพัฒนาระบบ',
  'ทักษะด้านการ coding: PHP / HTML5 / JavaScript',
  'ทักษะด้านการจัดการฐานข้อมูล (Database)',
  'ทักษะด้านการออกแบบกราฟฟิกและตกแต่งเว็บไซต์',
];

$personal = [
  'ตรงต่อเวลา มีความรับผิดชอบ',
  'สามารถปรับตัวตามสถานการณ์ได้',
  'สนใจด้านการออกแบบและสร้างสรรค์',
];

$experience = [
  [
    'title' => 'การออกแบบและพัฒนาเว็บไซต์ตลาดกลางศิลปะดิจิทัล',
    'type'  => 'Project', 'year' => '2026',
    'items' => [
      'วางแผนออกแบบพัฒนาระบบ',
      'ออกแบบฐานข้อมูล',
      'ระบบนี้แบ่งเป็นผู้ใช้งาน 3 กลุ่มหลักๆ ( ผู้ใช้งาน ศิลปิน และ ผู้ดูแลระบบ )',
      'สร้างฟอร์มและประเมินความพึงพอใจของผู้ใช้งาน',
      'ตรวจสอบจัดทำเอกสารรายงาน และ นำเสนอ',
    ],
  ],
  [
    'title' => 'ออกแบบและพัฒนาเว็บไซต์อุปกรณ์แคมป์ปิ้ง',
    'type'  => 'Project group', 'year' => '2026',
    'items' => [
      'ร่วมแบบรวมถึงพัฒนาระบบ',
      'จัดการกราฟิกเว็บไซต์',
      'จัดทำเอกสารรายงาน',
    ],
  ],
  [
    'title' => 'ออกแบบและพัฒนาระบบการเช่ารถจักรยานริมชายหาด',
    'type'  => 'Project group', 'year' => '2025',
    'items' => [
      'ออกแบบระบบและกลุ่มเป้าหมาย',
      'ออกแบบฐานข้อมูล',
      'จัดวางความสัมพันธ์ของระบบ',
      'จัดทำเอกสารรายงานระบบ',
    ],
  ],
];

function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
$hasPhoto = file_exists(__DIR__ . '/' . $profile['photo']);
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>เรซูเม่ - <?= e($profile['name']) ?></title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
:root{
  --bg:#0b0b12; --panel:#14141f; --panel2:#1b1b2b;
  --purple:#b583ff; --purple-d:#8b3dff; --text:#ececf5; --muted:#a3a3b8;
  --side:290px;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Noto Sans Thai',sans-serif;background:var(--bg);color:var(--text);line-height:1.7}

/* Banner */
.banner{
  height:200px;display:flex;flex-direction:column;justify-content:center;
  padding:0 40px 0 calc(var(--side) + 40px);
  background:
    radial-gradient(circle at 80% 20%,rgba(181,131,255,.55),transparent 55%),
    linear-gradient(135deg,#000 0%,#1a0933 60%,var(--purple-d) 150%);
  border-bottom:2px solid var(--purple-d);
}
.banner h1{font-size:2.3rem;font-weight:700;letter-spacing:.5px}
.banner h1 span{color:var(--purple)}
.banner p{color:var(--muted);font-size:1.1rem}

/* Sidebar */
.sidebar{
  position:fixed;top:0;left:0;bottom:0;width:var(--side);
  background:var(--panel);border-right:1px solid #262640;
  padding:28px 22px;overflow-y:auto;z-index:10;
}
.avatar{
  width:150px;height:150px;border-radius:50%;margin:0 auto 14px;
  border:4px solid var(--purple);box-shadow:0 0 25px rgba(139,61,255,.6);
  background:linear-gradient(135deg,var(--purple-d),#000);
  display:flex;align-items:center;justify-content:center;
  font-size:3rem;font-weight:700;overflow:hidden;
}
.avatar img{width:100%;height:100%;object-fit:cover}
.sidebar h2{text-align:center;font-size:1.2rem}
.sidebar .role{text-align:center;color:var(--purple);font-size:.85rem;margin-bottom:18px}
.menu{list-style:none;margin:16px 0}
.menu a{
  display:block;padding:10px 14px;border-radius:10px;color:var(--text);
  text-decoration:none;margin-bottom:6px;transition:.2s;
}
.menu a:hover,.menu a.active{background:linear-gradient(90deg,var(--purple-d),#5b21b6);}
.menu-title{color:var(--muted);font-size:.8rem;margin:18px 0 6px;letter-spacing:1px}
.info dt{color:var(--purple);font-size:.78rem;margin-top:10px}
.info dd{font-size:.92rem;word-break:break-word}

/* Content */
main{margin-left:var(--side);padding:40px}
section{margin-bottom:50px;scroll-margin-top:20px}
h3.sec{
  font-size:1.6rem;margin-bottom:20px;padding-left:14px;
  border-left:5px solid var(--purple);
}
.card{background:var(--panel);border:1px solid #262640;border-radius:16px;padding:22px}
.tags{display:flex;flex-wrap:wrap;gap:10px}
.tag{
  padding:8px 18px;border-radius:30px;background:var(--panel2);
  border:1px solid var(--purple-d);color:var(--text);text-decoration:none;transition:.2s;
}
a.tag:hover{background:var(--purple-d);box-shadow:0 0 14px var(--purple-d)}
ul.list{list-style:none}
ul.list li{padding:8px 0 8px 28px;position:relative;border-bottom:1px dashed #2a2a45}
ul.list li:last-child{border:0}
ul.list li::before{content:"◆";color:var(--purple);position:absolute;left:0;font-size:.8rem;top:12px}
.grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}

/* Timeline */
.timeline{position:relative;padding-left:34px}
.timeline::before{content:"";position:absolute;left:7px;top:6px;bottom:0;width:3px;
  background:linear-gradient(var(--purple),transparent)}
.t-item{position:relative;margin-bottom:28px}
.t-item::before{content:"";position:absolute;left:-34px;top:8px;width:16px;height:16px;
  border-radius:50%;background:var(--purple);box-shadow:0 0 12px var(--purple)}
.t-head{display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap}
.t-head h4{font-size:1.1rem;font-weight:600}
.t-meta{display:flex;justify-content:space-between;color:var(--purple);font-style:italic;margin:2px 0 8px}
.t-item ul{padding-left:22px;color:#d6d6e6}

footer{text-align:center;color:var(--muted);padding:20px;margin-left:var(--side);font-size:.85rem}

@media(max-width:850px){
  :root{--side:0px}
  .sidebar{position:static;width:100%;border-right:0}
  .banner{padding:0 20px;height:150px}
  main{padding:24px 18px}
  .grid{grid-template-columns:1fr}
  footer{margin-left:0}
}
</style>
</head>
<body>

<aside class="sidebar">
  <div class="avatar">
    <?php if ($hasPhoto): ?>
      <img src="<?= e($profile['photo']) ?>" alt="โปรไฟล์">
    <?php else: ?>
      <?= e(mb_substr($profile['name'], 0, 1)) ?>
    <?php endif; ?>
  </div>
  <h2><?= e($profile['name']) ?></h2>
  <p class="role"><?= e($profile['title']) ?></p>

  <ul class="menu">
    <li><a href="#personal" class="active">ข้อมูลส่วนตัว</a></li>
    <li><a href="#skills">ความถนัด</a></li>
    <li><a href="#abilities">ความสามารถ</a></li>
    <li><a href="#strengths">ทักษะเฉพาะตัว</a></li>
    <li><a href="#experience">ประสบการณ์และผลงาน</a></li>
  </ul>
</aside>

<header class="banner">
  <h1>RESUME <span>/ เรซูเม่</span></h1>
  <p><?= e($profile['title']) ?></p>
</header>

<main>
  <section id="personal">
    <h3 class="sec">ข้อมูลส่วนตัว</h3>
    <div class="card">
      <ul class="list">
        <?php foreach ($profile['info'] as $k => $v): ?>
          <li><strong style="color:var(--purple)"><?= e($k) ?>:</strong> <?= e($v) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="skills">
    <h3 class="sec">ความถนัด</h3>
    <div class="card tags">
      <?php foreach ($tools as [$name, $url]): ?>
        <?php if ($url): ?>
          <a class="tag" href="<?= e($url) ?>" target="_blank" rel="noopener"><?= e($name) ?></a>
        <?php else: ?>
          <span class="tag"><?= e($name) ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="abilities">
    <h3 class="sec">ความสามารถ</h3>
    <div class="card">
      <ul class="list">
        <?php foreach ($abilities as $a): ?><li><?= e($a) ?></li><?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="strengths">
    <h3 class="sec">ทักษะเฉพาะตัว</h3>
    <div class="card">
      <ul class="list">
        <?php foreach ($personal as $p): ?><li><?= e($p) ?></li><?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="experience">
    <h3 class="sec">ประสบการณ์และผลงาน</h3>
    <div class="timeline">
      <?php foreach ($experience as $x): ?>
        <div class="t-item">
          <div class="t-head"><h4><?= e($x['title']) ?></h4></div>
          <div class="t-meta"><span><?= e($x['type']) ?></span><span><?= e($x['year']) ?></span></div>
          <ul>
            <?php foreach ($x['items'] as $i): ?><li><?= e($i) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<footer>&copy; <?= date('Y') ?> <?= e($profile['name']) ?></footer>

<script>
// ไฮไลต์เมนูตามส่วนที่กำลังดูอยู่
const links=document.querySelectorAll('.menu a');
const obs=new IntersectionObserver(es=>{
  es.forEach(en=>{ if(en.isIntersecting){
    links.forEach(l=>l.classList.toggle('active',l.getAttribute('href')==='#'+en.target.id));
  }});
},{rootMargin:'-30% 0px -60% 0px'});
document.querySelectorAll('main section').forEach(s=>obs.observe(s));
</script>
</body>
</html>