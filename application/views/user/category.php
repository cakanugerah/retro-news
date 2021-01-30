 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">


                     </div>
                     <div class="row">
                     </div>
                     <div class="row m-t-25">
                         <div class="col-md col-lg-8">
                             <div class="overview-item overview-item--c4">
                                 <div class="overview__inner">
                                     <div class="overview-box clearfix">
                                         <div class="icon">
                                             <h2 class="title-1"><?php echo $title; ?></h2>
                                             <i class="zmdi zmdi-calendar-note"></i>
                                         </div>

                                         <table class="table table-top-countries">
                                             <th>Category Name</th>
                                             <th>Slug</th>
                                             <th class="text-right">Date created</th>
                                             <?php foreach ($category as $c) : ?>
                                                 <tbody>
                                                     <tr>
                                                         <td><?php echo $c['cat_name']; ?></td>
                                                         <td><?php echo $c['slug_cat']; ?></td>
                                                         <td class="text-right"><?php echo date('d F Y', $c['date']); ?></td>

                                                     </tr>
                                                 </tbody>
                                             <?php endforeach; ?>
                                         </table>

                                         <div class="overview-chart">
                                             <canvas id="widgetChart4"></canvas>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- END MAIN CONTENT-->
         <!-- END PAGE CONTAINER-->