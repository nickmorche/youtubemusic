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
                <h5 class="title">Adicionar Compositor</h5>
                </div>
                <div class="card-body">
                    <form method='post' action='<?=base_url('/compositores/save')?>' enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name='nome' type="text" class="form-control" placeholder="Digite o nome do compositor(a)" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea name='descricao' rows="4" cols="80" class="form-control" placeholder="Digite a descrição do compositor" value=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input name='avatar_img' type="file" id="avatar_img" class='form-control'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Background Imagem">Imagem Background</label>
                                    <input type="file" name="background_img" id="background_img" class='form-control'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Gênero Musical</label>
                                    <select name="id_genero_musical" id="id_genero_musical" class='form-control'>
                                        <?php foreach($generos_musicais as $generos_musicais_item): ?>
                                            <option value="<?=$generos_musicais_item['id']?>" style='color:black'><?=$generos_musicais_item['nome']?></option>
                                        <?php endforeach; ?>
                                    </select>
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
                <h4 class="card-title">Compositores</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style='overflow: auto'> 
                        <table class="table tablesorter " id="">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nome</th>
                                    <th>Gênero Musical</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <?php if(count($compositores)): ?>
                                <tbody>
                                    <?php foreach($compositores as $compositores_item): ?>
                                        <tr>
                                            <td><?=$compositores_item['nome']?></td>
                                            <td><?=$generos_musicais[$compositores_item['id_genero_musical'] - 1]['nome']?></td>
                                            <td><?=$compositores_item['id']?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php else: ?>
                                <tbody>
                                    <tr>
                                        <td colspan='3'> Não encontrado compositores</td>
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