<?php include_once('header.php'); ?>


<div class="fresh-table full-color-blue full-screen-table" id="main" style="min-height:95vh;">
    <div class="content">
        <div class="toolbar">
            <a href="home.html"><button id="alertBtn" class="btn">返回首頁</button></a>
            <a href="http://127.0.0.1:8000/tuition/"><button id="alertBtn" class="btn">圖表</button></a>
        </div>

            

        <table id="fresh-table" class="table">
            <thead style="font-size:2rem ;">
                <tr>
                    <th>學年度</th>
                    <th>學校名稱</th>
                    <th>醫學系</th>
                    <th>牙醫學系</th>
                    <th>醫學院</th>
                    <th>工學院</th>
                    <th>理農學院</th>
                    <th>商學院</th>
                    <th>文法學院</th>
                    <th>其他</th>
                </tr>
            </thead>
            <tbody style="font-size: 1.75rem;">
                <?php
                for ($x = 0; $x < count($year); $x++) {
                    for ($i = 0; $i < count($school_name); $i++) {
                        $sql = "SELECT * FROM `$year[$x]` WHERE `school_name` = '$school_name[$i]'";
                        $retval = mysqli_query($link, $sql);
                        echo "<tr>";

                        while ($row = mysqli_fetch_array($retval)) {

                            echo "<td>" . "{$year[$x]}  <br> " . "</td>" .
                                "<td>" . "{$row['school_name']}  <br> " . "</td>" .
                                "<td>" . "{$row['medical_science']}  <br> " . "</td>" .
                                "<td>" . "{$row['dentist']}  <br> " . "</td>" .
                                "<td>" . "{$row['medical']}  <br> " . "</td>" .
                                "<td>" . "{$row['institute']}  <br> " . "</td>" .
                                "<td>" . "{$row['College_of_Agriculture']}  <br> " . "</td>" .
                                "<td>" . "{$row['schools']}  <br> " . "</td>" .
                                "<td>" . "{$row['Grammar_School']}  <br> " . "</td>" .
                                "<td>" . "{$row['items']}  <br> " . "</td>";
                        }
                        "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

<script type="text/javascript">
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function() {

        $("#status").delay(2000).fadeOut(1500); //delay --> 延遲幾秒才fadeOut
        $("#preloader").delay(3000).fadeOut(500);
    });
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    window.operateEvents = {
        'click .like': function(e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row))
            console.log(value, row, index)
        },
        'click .edit': function(e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row))
            console.log(value, row, index)
        },
        'click .remove': function(e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'id',
                values: [row.id]
            })
        }
    }


    $(function() {
        $table.bootstrapTable({
            classes: 'table table-hover table-striped',
            toolbar: '.toolbar',

            search: true,
            showRefresh: false,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 5,
            pageList: [5, 10, 25, 50, 100],

            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                return ''
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + '顯示筆數'
            }
        })

        // $alertBtn.click(function() {
        //     alert('You pressed on Alert')
        // })
    })
</script>
<!-- <script> -->


<!-- $(document).ready(function() {

        $('#myTable').DataTable({
            initComplete: function() {
                // var cols = this.api().columns([2, ]);
                cols.every(function() {
                    var column = this;
                    var select = $('<select><option value="">列出全部</option></select>')
                        // .appendTo( $(column.footer()).empty() )
                        .appendTo($(column.header()))
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        if (d != '') {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        }
                    });
                });
            }
        });
    }); -->
<!-- </script> -->
<?php include_once('footer.html'); ?>