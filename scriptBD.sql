--------------
CREATE VIEW v_areas AS
SELECT
    a.*,
    o.nombre as 'oficina'
from areas a
    INNER JOIN oficinas o ON a.idOficina = o.id

---------------

CREATE VIEW v_siguienteidpersona
AS
select
    max(`personas`.`id`) + 1 AS `siguiente`
from `personas`