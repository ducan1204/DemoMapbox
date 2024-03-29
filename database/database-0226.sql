USE [mapbox]
GO
ALTER TABLE [dbo].[users] DROP CONSTRAINT [DF__users__type__25869641]
GO
ALTER TABLE [dbo].[failed_jobs] DROP CONSTRAINT [DF__failed_jo__faile__29572725]
GO
/****** Object:  Table [dbo].[users]    Script Date: 2/26/2020 11:46:36 PM ******/
DROP TABLE [dbo].[users]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 2/26/2020 11:46:36 PM ******/
DROP TABLE [dbo].[password_resets]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 2/26/2020 11:46:36 PM ******/
DROP TABLE [dbo].[migrations]
GO
/****** Object:  Table [dbo].[maps]    Script Date: 2/26/2020 11:46:36 PM ******/
DROP TABLE [dbo].[maps]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 2/26/2020 11:46:36 PM ******/
DROP TABLE [dbo].[failed_jobs]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 2/26/2020 11:46:36 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[maps]    Script Date: 2/26/2020 11:46:36 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[maps](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[title] [nvarchar](255) NOT NULL,
	[address] [nvarchar](255) NOT NULL,
	[city] [nvarchar](255) NOT NULL,
	[map_style] [nvarchar](255) NOT NULL,
	[access_token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 2/26/2020 11:46:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 2/26/2020 11:46:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 2/26/2020 11:46:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[type] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[maps] ON 

INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (1, N'title2', N'Address', N'Ha Noi', N'mapbox://styles/leducan/ck6r8hj0n5kqn1ilemu1tuggs', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-02-23T02:06:20.287' AS DateTime), CAST(N'2020-02-24T12:53:53.900' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (2, N'Bản đồ quy hoạch phường Thắng Lợi x', N'123, đường B8, phường 1, quận 2', N'Ha Noi', N'mapbox://styles/leducan/ck6r897zi0r8t1iqkbk76w9t4', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-02-23T04:22:20.120' AS DateTime), CAST(N'2020-02-24T14:43:22.820' AS DateTime))
SET IDENTITY_INSERT [dbo].[maps] OFF
SET IDENTITY_INSERT [dbo].[migrations] ON 

INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (1, N'2014_10_12_000000_create_users_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (2, N'2014_10_12_100000_create_password_resets_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (3, N'2019_08_19_000000_create_failed_jobs_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (4, N'2020_02_22_215104_create_maps_table', 2)
SET IDENTITY_INSERT [dbo].[migrations] OFF
SET IDENTITY_INSERT [dbo].[users] ON 

INSERT [dbo].[users] ([id], [name], [email], [email_verified_at], [password], [remember_token], [type], [created_at], [updated_at]) VALUES (1, N'Admin', N'admin@admin.com', NULL, N'$2y$10$K0XQu1UJhJSIpKZQ2lrl9OyVyuypeqLwiRwV8BvdujJwSX.CGsNQa', NULL, N'default', CAST(N'2020-02-22T03:04:31.400' AS DateTime), CAST(N'2020-02-22T19:17:16.600' AS DateTime))
SET IDENTITY_INSERT [dbo].[users] OFF
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
ALTER TABLE [dbo].[users] ADD  DEFAULT ('default') FOR [type]
GO
