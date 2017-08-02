<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-bar-chart-o fa-fw"></i> Informacion Personal
        </h3>
    </div>
    <div class="panel-body">

        <div class="form-group">
            <label class="col-md-4 control-label">Apellido</label>
            <div class="col-md-6">
                <input type="text" class="form-control" th:field="*{lastName}" />
                <td th:if="${#fields.hasErrors('lastName')}"
                    th:errors="*{lastName}">Error</td>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-6">
                <input type="text" class="form-control" th:field="*{firstName}" />
                <td th:if="${#fields.hasErrors('firstName')}"
                    th:errors="*{firstName}">Error</td>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Numero Identificacion</label>
            <div class="col-md-6">
                <input type="text" class="form-control"
                       th:field="*{numberIdentification}" />
                <td th:if="${#fields.hasErrors('numberIdentification')}"
                    th:errors="*{numberIdentification}">Error</td>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Fecha Nacimiento</label>
            <div class="col-md-6">
                <div class="input-group input-append date" id="birthDate">
                    <input type="text" class="form-control" th:field="*{birthDate}"
                           placeholder="DD/MM/YYYY" /> <span
                           class="input-group-addon add-on"><span
                            class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
        </div>

        <div th:include="directive/party/fragments/partyForm" th:remove="tag">
        </div>
    </div>
</div>