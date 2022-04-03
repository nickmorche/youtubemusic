<div class="content" style="padding-left:43px">
    <?php if($msg): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert <?= strstr($msg, 'criado') === false ? 'alert-danger' : 'alert-success'?> ">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span>
                        <?= $msg ?>
                        <?= \Config\Services::validation()->listErrors(); ?>
                    </span>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h5 class="title">Adicionar Gênero Musical</h5>
                </div>
                <div class="card-body">
                    <form method='post' action='<?=base_url('/generos_musicais/save')?>'>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name='nome' type="text" class="form-control" placeholder="Digite o nome do compositor(a)" value="">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value='' name='id'>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                <h4 class="card-title">Gêneros Musicais</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style='overflow: auto'> 
                        <table class="table tablesorter " id="">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <?php if(count($generos_musicais)): ?>
                                <tbody>
                                    <?php foreach($generos_musicais as $generos_musicais_item): ?>
                                        <tr>
                                            <td><?=$generos_musicais_item['nome']?></td>
                                            <td><?=$generos_musicais_item['id']?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php else: ?>
                                <tbody>
                                    <tr>
                                        <td colspan='3'> Não encontrado gêneros musicais</td>
                                    </tr>
                                </tbody>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>