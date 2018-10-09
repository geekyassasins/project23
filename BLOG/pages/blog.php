<?php
  $fa="fa-newspaper-o";
  $maintitle="Blog";
  $title="Create Blog";
  $mainmenu="ADMINISTRATOR";
  $menu="BLOG";
  include "header.php";
 
  $istable=1;
  $emailsms=1;
  if($_GET['id']!="")
  {  
    $id=1;
    $sqlquery=mysqli_query($conn,"select * from KitoDiet where blog_id=".$_GET['id']." ");
    $blog=mysqli_fetch_array($sqlquery);

    $date=date('Y-m-d', strtotime($blog['release_date']));
  }
  else
  {  
    $id=0;  
    $date=date('Y-m-d');
  }
  ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Blog</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form id="emailvalidefrm" method="POST" role="form">


              <input type="hidden" id="condition" name="condition" value="<?php echo $id;?>">  
              <input type="hidden" id="blog_id" name="blog_id" value="<?php echo $blog['blog_id'];?>">  


              <div class="form-group">
                    <label>Written By </label>
                <input class="form-control" placeholder="Written By" id="writtenby" value="<?php echo $blog['writer_name'];?>" name="writtenby" required >
                <span id="msgwritten" class="alert hide">Name should not be blank</span>
              
              </div>

              <div class="form-group">
                    <label>Blog Title</label>
                <input class="form-control" placeholder="Blog Title" id="blogtitle" value="<?php echo $blog['title'];?>" name="blogtitle" required >
                <span id="msgblogtitle" class="alert hide">Blog Title should not be blank</span>
              
              </div>




              <div class="form-group">
                    <label>Published Date</label>
                <input type="date" data-date="" data-date-format="DD MM YYYY" class="form-control" placeholder="" id="pdate" name="pdate" required value="<?php echo $date;?>">
                <span id="msgpd" class="alert hide">Published Date should not be blank</span>
<script>
$("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script>
              
              </div>






              <div class="form-group">
                    <label>Summary</label>
                    <textarea id="editor1" class="compose-textarea" name="editor1" style="height: 300px" required data-bv-notempty-message="The Body is required and cannot be empty" ><?php echo $blog['blog'];?></textarea>
                  <span id="msgsummary" class="alert hide">Blog should not be blank</span>
               <!--   <textarea id="compose-textarea" class="form-control" style="height: 300px" required></textarea>-->
               
          <!-- /.box -->

              </div>
              <div class="form-group">
                    <label>Call to Action Text</label>
                <input class="form-control" placeholder="Call to Action" id="cta" value="<?php echo $blog['call_to_action'];?>" name="cta" required >
                <span id="msgcall" class="alert hide">should not be blank</span>
              
              </div>



            <!-- /.box-body -->
                  <small id="msgsuccess"  class="alert hide" style="color:#00A41E;">
                       <t class="text-center" ><strong>Success!</strong> Blog Added.</t><br>
                  </small>

            <div class="box-footer">
              <div class="pull-right">
                <!--<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>-->
               <a href="blog-PR-view.php?page=BLOG&id=1" class="btn btn-primary"  data-toggle="tooltip" title="&nbsp;&nbsp; Click Here To View Blog&nbsp;&nbsp;" ><i class="fa fa-envelope-o"></i> View</a> <button type="button" class="btn btn-primary" id="emailsms" data-toggle="tooltip" title="&nbsp;&nbsp; Click Here To Create Blog&nbsp;&nbsp;" onclick="return saveblog();"><i class="fa fa-envelope-o"></i> Save</button>

              </div>
              <!--<button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>-->
            </div>
            <!-- /.box-footer -->
          </div>
          </form>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php
  include "footer.php";
?>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Select2 -->
<script src="<?php echo $server;?>plugins/select2/select2.full.min.js"  type="text/javascript" ></script>
<!-- InputMask -->
<script src="<?php echo $server;?>plugins/input-mask/jquery.inputmask.js"  type="text/javascript" ></script>
<script src="<?php echo $server;?>plugins/input-mask/jquery.inputmask.date.extensions.js"  type="text/javascript" ></script>
<script src="<?php echo $server;?>plugins/input-mask/jquery.inputmask.extensions.js"  type="text/javascript" ></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/js-yaml/3.6.0/js-yaml.min.js'></script>
<script>

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

  });


function saveblog()
{  

  flag=1;
  if (!$('#msgwritten').hasClass("hide"))
  {
    $('#msgwritten').addClass("hide");
  };
  if (!$('#msgblogtitle').hasClass("hide"))
  {
    $('#msgblogtitle').addClass("hide");
  };
  if (!$('#msgsummary').hasClass("hide"))
  {
    $('#msgsummary').addClass("hide");
  };
  if (!$('#msgpd').hasClass("hide"))
  {
    $('#msgpd').addClass("hide");
  };

  if (!$('#msgcall').hasClass("hide"))
  {
    $('#msgcall').addClass("hide");
  };




  if (!$('#msgsuccess').hasClass("hide"))
  {
    $('#msgsuccess').addClass("hide");
  };

  var writtenby = $.trim(document.getElementById('writtenby').value);
  if(writtenby=="")
  {

  	flag=0;
    $('#msgwritten').removeClass("hide");  	
  }

  var blogtitle = $.trim(document.getElementById('blogtitle').value);
  if(blogtitle=="")
  {

  	flag=0;
    $('#msgblogtitle').removeClass("hide");  	
  }


  var date = $.trim(document.getElementById('pdate').value);

  var editor  = CKEDITOR.instances['editor1'].getData();
  Summary=editor;
  if(Summary=="")
  {

  	flag=0;
    $('#msgsummary').removeClass("hide");  	
  }

  var cta = $.trim(document.getElementById('cta').value);
  if(cta=="")
  {

  	flag=0;
    $('#msgcall').removeClass("hide");  	
  }



  var condition = $.trim(document.getElementById('condition').value);
  var blog_id = $.trim(document.getElementById('blog_id').value);

//alert(flag);
    if(flag==1)
    {
        //alert(writtenby+' '+blogtitle+' '+Summary+' ');

         $.post('../Validation/ajax-blog.php',
          {

              writtenby:writtenby,
              blogtitle:blogtitle,
              date:date,
              Summary:Summary,    
              condition:condition,blog_id:blog_id,cta:cta,
          },
          function(res)
          {//alert(res);
            var string = $.trim(res);
            if (string == "true")
            {
              $("#msgsuccess").removeClass("hide");
            }
          });
    }

  document.getElementById('reportadd').disabled = false;
  return false;
}

function isInt(value) {
  if (isNaN(value)) {
    return false;
  }
  var x = parseFloat(value);
  return (x | 0) === x;
}
</script>

