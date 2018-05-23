<center><h1>MENU STOPWAD</h1></center>
<div class="row">
<div class="col-md-6">  
    <div class="page-header">
        <center><h3>Masukan kalimat</h3></center> 
    </div>
    <form role="form" class="form-horizontal">
        <div class="form-group">
            <label>Pesan</label>
            <textarea id="kalimat" class="texteditor"/></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="proses()">Proses</button>
        </div>
    </form>
</div>
    <div class="col-md-6">
    <div class="page-header">
        <center><h3>Hasil</h3></center> 
    </div>
        <center><div id="list"></div></center>
    </div>
</div>
<br>
<hr>

<script type="text/javascript">
    function proses() {
        var kalimat = $("#kalimat").val();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url() ?>Stopwad/proses",
            data: "kalimat=" + kalimat,
            success: function (html) {
                swal("Yeah", "Berhasil di Proses", "success");
                $("#list").html(html);
            }
        })
    }
</script>