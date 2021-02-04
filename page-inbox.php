<?php get_header(); ?>

<!-- <header class="entry-header">
    <h1 class="entry-title"><?php the_title();?></h1>
</header> -->
<style>
    .grid-container{
        background: white;
        border: 2px solid black;
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        height: 95vh;
        width: 95vw;
        margin: 0 auto;
        z-index: 2;
        position: absolute;
        top: 5vh;
        left: 1vw;
    }
    .grid-item{
        background-color: brown;
    }
    .dashboard{
      background: #434343ff;
      display: grid;
      grid-template-rows: repeat(12, 1fr);
      justify-content: center;
      color: white;
      grid-row: 1/ span 12;
      grid-column: 1/ span 1;
      justify-content: center;

    }
    .sort-item{
      color: grey;
      font-size: .60em;
      text-decoration: none;
      
    }
    .dashboard span{
      font-size: 2em;
      color: #d1e4dd;
    }
    .dashboard div{
        text-align: center;
        width: 100%;
    }
    .dashboard-icon span{
        width: 100%;
        margin-bottom: .5em;
    }
    .msg-menu{
      background: #f3f3f3ff;
      grid-row: 1/ span 12;
      grid-column: 2/ span 3;
    }
    .msg-view{
      background: white;
      grid-row: 1/ span 12;
      grid-column: 5/ span 8;
    }
    /* .sub-grid-container div{
        margin-bottom: 1em;
    } */
    .dash-section{
        margin-bottom: 2em;
    }
    .icon-link{
        text-decoration: none;
    }
    .inbox-logo{
        color: #d1e4dd;
        margin: .5em 0 1em 0;
    }
</style>
<div class="grid-container">
    <div class="grid-item dashboard">
      <div class="sub-grid-container">
          <div class="inbox-logo">inbox</div>
          <div class="dash-section">
            <div class="sub-item1 dashboard-icon"><a href="#" class="icon-link"><span class="dashicons dashicons-email"></span></a></div>
            <div class="sub-item2"><a href="#" class="sort-item">All</a></div>
          </div>
         <div class="dash-section">
            <div class="sub-item3 dashboard-icon"><a href="#" class="icon-link"><span class="dashicons dashicons-admin-plugins"></span></a></div>
            <div class="sub-itme4"><a href="#" class="sort-item">Plugin<br/>Development</a></div>
         </div>
         <div class="dash-section">
           <div class="sub-item5 dashboard-icon"><a href="#" class="icon-link"><span class="dashicons dashicons-editor-code"></span></a></div>
           <div class="sub-item6"><a href="#" class="sort-item">Theme<br/>Development</a></div>
         </div>
         <div class="dash-section">
           <div class="sub-item7 dashboard-icon"><a href="#" class="icon-link"><span class="dashicons dashicons-media-code"></span></a></div>
           <div class="sub-item8"><a href="#" class="sort-item">Customize<br/>Theme</a></div>
         </div>    
      </div>
    </div>
    <div class="grid-item msg-menu">
        <?php get_template_part('template-parts/inbox','loop'); ?>
    </div>
    <div class="grid-item msg-view">
      
    </div>
</div>

<?php get_footer(); ?>