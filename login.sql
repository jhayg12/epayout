select UserCode , 'AACIProd'[DBase],
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [AACIProd].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [AACIProd].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'AABC',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [AABC].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [AABC].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'JSY',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [JSY].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [JSY].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'SCIPorac',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [SCIPorac].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [SCIPorac].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'AACITestProd',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [AACITestProd].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [AACITestProd].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'StClaire',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [StClaire].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [StClaire].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'AllAsian',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [AllAsian].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [AllAsian].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'Organic',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [Organic].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [Organic].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

UNION ALL

select UserCode , 'eaglehigh',
(select case when Action = 'I' then 'OPEN' when Action = 'O' then 'CLOSED' end
from [eaglehigh].dbo.USR5 r1
where r1.UserCode = r.UserCode and r1.Date = r.Date and r1.Time = Max(r.Time)) [Login Status]
, DATE, ClientName, Max(r.Time) [Login Time], r.ClientIP
from [eaglehigh].dbo.USR5 r where CONVERT(VARCHAR(50), r.DATE ,103) = CONVERT(VARCHAR(50), getdate() ,103)
group by
UserCode, DATE, ClientName, ClientIP
having MAX(time) = Max(r.Time)

order by [Login Status] DESC,UserCode,Dbase