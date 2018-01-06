<font face="Arial, Helvetica, sans-serif">
</select><br/>
    <label for="codigo">Codigo</label><br/>
    <input type="text" name="codigo" value="<?php echo $registro['codigo']; ?>"/><br/>
    <label for="nome">Nome</label><br/>
    <input type="text" name="nome" value="<?php echo $registro['nome']; ?>"/><br/>
    <textarea name="descricao"><?php echo $registro['descricao']; ?></textarea><br/>
    <label for="foto">Foto</label><br/>
    <input type="file" name="foto"><br/>
    <label for="preco">Pre&ccedil;o</label><br/>
    <input type="text" name="preco" value="<?php echo $registro['preco']; ?>"/><br/>
    <input type="submit" value="SALVAR" />
  </form>
</font>