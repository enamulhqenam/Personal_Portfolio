
$(document).ready(function(){

      
      $('#AddNewBtn').on('click',function(e){
            e.preventDefault();
            $('#NewSkillModal').modal('show');
      });
      $('#formREsetBtn').on('click',function(e){
            e.preventDefault();
            $('#SkillForm')[0].reset();
      });

      $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.ajax({
                  type: "POST",
                  url: "/Skill",
                  data: $('#SkillForm').serialize(),success:function(data){
                        $('#SkillFormu')[0].reset();
                        $('#NewSkillModal').modal('hide');
                  },
                  error:function(data){
                        console.log('Error While added new Aboute Itemes'+data);
                  },
                        
            });
      });
});