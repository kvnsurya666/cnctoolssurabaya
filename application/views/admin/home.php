<script src="<?= base_url('assets/admin/highcharts/highcharts.js') ?>"></script>
<script src="<?= base_url('assets/admin/highcharts/data.js') ?>"></script>
<script src="<?= base_url('assets/admin/highcharts/drilldown.js') ?>"></script>
<h1><img src="<?= base_url('assets/img/admin/admin-home.png') ?>" class="header-img" style="margin-top:-3px;"> Home</h1>
<hr>
<div class="home-page">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard - Statistics Overview
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-envelope-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= 1 ?></div>
                            <div>Produk Kids</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= 2 ?></div>
                            <div>Produk Wanita</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-sort-numeric-desc fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= 2 ?></div>
                            <div>Produk Pria</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Last Activity Log</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // if ($activity->result()) {
                                //     foreach ($activity->result() as $action) {
                                        ?>
                                        <tr>
                                            <td><i class="fa fa-user" aria-hidden="true"></i> <b><?= 'Lionel Messi' ?></b></td>
                                            <td><?= 'Playing Money Heist' //$action->activity . ' on ' . date('d.m.Y / H.m.s', $action->time) ?></td>
                                        </tr>
                                        <?php
                                //     }
                                // } else {
                                    ?>
                                    <tr>
                                        <td colspan="2">No history found!</td>
                                    </tr>
                                <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /*
     * Chart for orders by referrer
     */
    $(function () {
    Highcharts.chart('container-by-referrer', {
    chart: {
    type: 'column'
    },
            title: {
            text: 'Orders comming from..'
            },
            subtitle: {
            text: 'Most Orders By Referrer'
            },
            xAxis: {
            type: 'category'
            },
            yAxis: {
            title: {
            text: 'Total max numbers'
            }

            },
            legend: {
            enabled: false
            },
            plotOptions: {
            series: {
            borderWidth: 0,
                    dataLabels: {
                    enabled: true,
                            format: '{y}'
                    }
            }
            },
            tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },
            series: [{
            name: 'Referrer',
                    colorByPoint: true,
                    data: [
<?php foreach ($byReferral as $referrer) { ?>
                        
                        name: '<?= $referrer['referrer'] ?>',
                                y: <?= $referrer['num'] ?>,
                                drilldown: '<?= $referrer['referrer'] ?>'
                        
<?php } ?>
                    ]
            }]
    });
    });
    /*
     * Chart for orders by mount/year 
     */
    $(function () {
    Highcharts.chart('container-by-month', {
    title: {
    text: 'Monthly Orders',
            x: - 20
    },
            subtitle: {
            text: 'Source: Orders table',
                    x: - 20
            },
            xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
            title: {
            text: 'Orders'
            },
                    plotLines: [{
                    value: 0,
                            width: 1,
                            color: '#808080'
                    }]
            },
            tooltip: {
            valueSuffix: ' Orders'
            },
            legend: {
            layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
            },
            series: [
<?php foreach ($ordersByMonth['years'] as $year) { ?>
              
                name: '<?= $year ?>',
                        data: [<?= implode(',', $ordersByMonth['orders'][$year]) ?>]
                
<?php } ?>
            ]
    });
    });
</script>
