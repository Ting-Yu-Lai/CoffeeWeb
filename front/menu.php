<section id="menu" class="py-5">
  <div class="container">
    <h2 class="text-center mb-5 text-gold">菜單 MENU</h2>

    <!-- 分類切換按鈕 -->
    <ul class="nav nav-pills justify-content-center mb-4" id="menuTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="coffee-tab" data-bs-toggle="pill" data-bs-target="#coffee" type="button" role="tab">咖啡</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="milk-tab" data-bs-toggle="pill" data-bs-target="#milk" type="button" role="tab">鮮奶類</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tea-tab" data-bs-toggle="pill" data-bs-target="#tea" type="button" role="tab">純茶</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">特調</button>
      </li>
    </ul>

    <!-- 對應的內容區塊 -->
    <div class="tab-content" id="menuTabContent">

      <!-- ☕ 咖啡 -->
      <div class="tab-pane fade show active" id="coffee" role="tabpanel">
        <ul class="menu-list">
          <li><span>美式</span><span>(I/H)</span><span>130<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>柚子美式</span><span>(I)</span><span>140<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>柚子氣泡美式</span><span>(I)</span><span>160<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>蘋果美式</span><span>(I)</span><span>160<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>拿鐵</span><span>(I/H)</span><span>160<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>卡布</span><span>(H)</span><span>160<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>黑糖拿鐵</span><span>(I/H)</span><span>170<i class="fa-brands fa-ethereum"></i></span></li>
          <li><span>摩卡拿鐵</span><span>(I/H)</span><span>180<i class="fa-brands fa-btc"></i></span></li>
        </ul>
      </div>

      <!-- 🥛 鮮奶類 -->
      <div class="tab-pane fade" id="milk" role="tabpanel">
        <ul class="menu-list">
          <li><span>抹茶牛奶</span><span>(I/H)</span><span>$160</span></li>
          <li><span>可可牛奶</span><span>(I/H)</span><span>$150</span></li>
          <li><span>伯爵鮮奶茶</span><span>(I/H)</span><span>$160</span></li>
        </ul>
      </div>

      <!-- 🍵 純茶 -->
      <div class="tab-pane fade" id="tea" role="tabpanel">
        <ul class="menu-list">
          <li><span>伯爵茶</span><span>(H)</span><span>$140</span></li>
          <li><span>莓果茶</span><span>(H)</span><span>$140</span></li>
          <li><span>薄荷茶</span><span>(H)</span><span>$140</span></li>
          <li><span>草本茶</span><span>(H)</span><span>$160</span></li>
        </ul>
      </div>

      <!-- 🍹 特調 -->
      <div class="tab-pane fade" id="special" role="tabpanel">
        <ul class="menu-list">
          <li><span>退紅</span><span>(I)</span><span>$160</span></li>
          <li><span>鳳梨冰茶</span><span>(I)</span><span>$160</span></li>
          <li><span>墨西多氣泡水</span><span>(I)</span><span>$160</span></li>
          <li><span>抹茶柚子氣泡飲</span><span>(I)</span><span>$160</span></li>
        </ul>
      </div>

    </div>
  </div>
</section>