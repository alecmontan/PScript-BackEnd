var comentApp = angular.module('comentApp', []);    
comentApp.controller('ComentList', function ($scope,$http) {
    $scope.coments    =  [];
    $scope.add_cmt = true;
    $scope.update_cmt = false;
    
    $scope.coments = [
                        {
                            'nome': 'Anderson',
                            'coment': 'Olá, sou Anderson'
                        },
                        {
                            'nome': 'Bruna',
                            'coment': 'Olá, sou Bruna'
                        },
                        {
                            'nome': 'Carol',
                            'coment': 'Olá, sou Carol'
                        }
                    ];

    
            
    $scope.remove = function (index) {
        $scope.coments.splice(index,1);
    }

    $scope.get_coment = function() {
        $http.get("db.php?action=get_coment").success(function(data)
        {
            $scope.coments = data;
            //console.log(data);
        });
    }


    $scope.coment_submit = function() {
        $http.post('db.php?action=add_coment', 
            {
                'nome'     : $scope.nome, 
                'coment'     : $scope.coment
            }
        )
        .success(function (data, status, headers, config) {
          $scope.get_coment();
          $scope.nome='';
          $scope.coment='';
          $scope.add_coment.$setPristine();
        })
        .error(function(data, status, headers, config){
           
        });
    }


    $scope.coment_delete = function(index) {  
     
      $http.post('db.php?action=delete_coment', 
            {
                'coment_index'     : index
            }
        )      
        .success(function (data, status, headers, config) {    
             $scope.get_coment();
             alert("Comentario deletado com sucesso.");
        })

        .error(function(data, status, headers, config){
           
        });
    }


    $scope.coment_edit = function(index) {  
      $scope.update_cmt = true;
      $scope.add_cmt = false;
      $http.post('db.php?action=edit_coment', 
            {
                'coment_index'     : index
            }
        )      
        .success(function (data, status, headers, config) {    
            $scope.id          =   data[0]["id"];
            $scope.nome        =   data[0]["nome"];
            $scope.coment        =   data[0]["coment"];
        })

        .error(function(data, status, headers, config){
            
        });
        
    }


    $scope.update_coment = function() {

        $http.post('db.php?action=update_coment', 
                    {
                        'id'     : $scope.id,
                        'nome'     : $scope.nome, 
                        'coment'     : $scope.coment
                    }
                  )
                .success(function (data, status, headers, config) {
                  $scope.get_coment();
                  $scope.add_cmt = true;
                  $scope.update_cmt = false;
                  $scope.nome='';
                  $scope.coment='';
                  $scope.add_coment.$setPristine();
                  
                })
                .error(function(data, status, headers, config){
                   
                });
    }
});
