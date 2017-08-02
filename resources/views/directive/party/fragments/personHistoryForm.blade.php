<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-bar-chart-o fa-fw"></i> Informacion
            Academica-Laboral
        </h3>
    </div>
    <div class="panel-body">
        <a id="addRow" class="btn primary">Agregar fila</a>

        <table class="table" id="tableAcademicHistory">
            <thead>
                <tr>

                    <th width="15%" align="left">Area</th>
                    <th width="15%" align="left">Institucion</th>
                    <th width="15%" align="left">Grado Academico</th>


                </tr>
            </thead>
            <tbody>
                <tr class="gradeA odd">
                    <td align="left" width="15%">
                        <input type="text"
                               class="form-control" th:field="*{historyAcademic[0].area}" />
                        <p th:if="${#fields.hasErrors('historyAcademic[0].area')}" 
                           th:errors="*{historyAcademic[0].area}">Error</p>

                    </td>
                    <td align="left" width="15%">
                        <input type="text"
                               class="form-control" th:field="*{historyAcademic[0].institution}" />
                        <p th:if="${#fields.hasErrors('historyAcademic[0].institution')}" th:errors="*{historyAcademic[0].institution}">Error</p>
                    </td>
                    <td align="left" width="15%">
                        <select class="form-control"
                                id="type" th:field="*{historyAcademic[0].gradeAcademic}"  >
                            <option value="T">T�cnico</option>
                            <option value="M">Maestria</option>
                            <option value="D">Doctorado</option>
                        </select></td>




                </tr>
            </tbody>
        </table>



    </div>
</div>