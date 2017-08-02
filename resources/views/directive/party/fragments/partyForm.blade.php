<div class="form-group">
    <label class="col-md-4 control-label">Correo</label>
    <div class="col-md-6">
        <input type="text" class="form-control" th:field="*{email}" />
        <td th:if="${#fields.hasErrors('email')}" th:errors="*{email}">Error</td>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Numero de Telefono</label>
    <div class="col-md-6">
        <input type="text" class="form-control" th:field="*{telephoneNumber}" />
        <td th:if="${#fields.hasErrors('telephoneNumber')}"
            th:errors="*{telephoneNumber}">Error</td>
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Direccion</label>
    <div class="col-md-6">
        <input type="text" class="form-control" th:field="*{address}" />
        <td th:if="${#fields.hasErrors('address')}" th:errors="*{address}">Error</td>
    </div>
</div>