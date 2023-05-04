namespace Scrap.Forms
{
    partial class frmCoax
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.dgvComponentes = new System.Windows.Forms.DataGridView();
            this.lblAreas = new System.Windows.Forms.Label();
            this.lblLinea = new System.Windows.Forms.Label();
            this.lblProceso = new System.Windows.Forms.Label();
            this.lblDefecto = new System.Windows.Forms.Label();
            this.gbxBusqueda = new System.Windows.Forms.GroupBox();
            this.rdbSetup = new System.Windows.Forms.RadioButton();
            this.ckxAtrazo = new System.Windows.Forms.CheckBox();
            this.label2 = new System.Windows.Forms.Label();
            this.cbxConfig = new System.Windows.Forms.ComboBox();
            this.lblConfig = new System.Windows.Forms.Label();
            this.cbxComponentes = new System.Windows.Forms.ComboBox();
            this.lblComponente = new System.Windows.Forms.Label();
            this.btnSave = new System.Windows.Forms.Button();
            this.cbxNp = new System.Windows.Forms.ComboBox();
            this.lblNp = new System.Windows.Forms.Label();
            this.dtpFecha = new System.Windows.Forms.DateTimePicker();
            this.cbxLinea = new System.Windows.Forms.ComboBox();
            this.cbxEstaciones = new System.Windows.Forms.ComboBox();
            this.cbxArea = new System.Windows.Forms.ComboBox();
            this.txtLead = new System.Windows.Forms.TextBox();
            this.lblBusqueda = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.rdbComponente = new System.Windows.Forms.RadioButton();
            this.cbxProceso = new System.Windows.Forms.ComboBox();
            this.rdbLead = new System.Windows.Forms.RadioButton();
            this.cbxDefecto = new System.Windows.Forms.ComboBox();
            this.txtCantidad = new System.Windows.Forms.TextBox();
            this.lblCantidad = new System.Windows.Forms.Label();
            this.cbxTurno = new System.Windows.Forms.ComboBox();
            this.lblTurno = new System.Windows.Forms.Label();
            this.lblMensajes = new System.Windows.Forms.Label();
            this.groupBox2.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvComponentes)).BeginInit();
            this.gbxBusqueda.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox2
            // 
            this.groupBox2.BackColor = System.Drawing.Color.White;
            this.groupBox2.Controls.Add(this.dgvComponentes);
            this.groupBox2.Location = new System.Drawing.Point(12, 274);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(1010, 315);
            this.groupBox2.TabIndex = 1;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "groupBox2";
            // 
            // dgvComponentes
            // 
            this.dgvComponentes.AllowUserToAddRows = false;
            this.dgvComponentes.BackgroundColor = System.Drawing.SystemColors.ButtonHighlight;
            this.dgvComponentes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvComponentes.Location = new System.Drawing.Point(6, 31);
            this.dgvComponentes.Name = "dgvComponentes";
            this.dgvComponentes.Size = new System.Drawing.Size(998, 278);
            this.dgvComponentes.TabIndex = 0;
            // 
            // lblAreas
            // 
            this.lblAreas.AutoSize = true;
            this.lblAreas.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAreas.Location = new System.Drawing.Point(30, 28);
            this.lblAreas.Name = "lblAreas";
            this.lblAreas.Size = new System.Drawing.Size(52, 20);
            this.lblAreas.TabIndex = 0;
            this.lblAreas.Text = "Area:";
            // 
            // lblLinea
            // 
            this.lblLinea.AutoSize = true;
            this.lblLinea.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblLinea.Location = new System.Drawing.Point(24, 69);
            this.lblLinea.Name = "lblLinea";
            this.lblLinea.Size = new System.Drawing.Size(58, 20);
            this.lblLinea.TabIndex = 1;
            this.lblLinea.Text = "Linea:";
            // 
            // lblProceso
            // 
            this.lblProceso.AutoSize = true;
            this.lblProceso.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblProceso.Location = new System.Drawing.Point(348, 28);
            this.lblProceso.Name = "lblProceso";
            this.lblProceso.Size = new System.Drawing.Size(79, 20);
            this.lblProceso.TabIndex = 2;
            this.lblProceso.Text = "Proceso:";
            // 
            // lblDefecto
            // 
            this.lblDefecto.AutoSize = true;
            this.lblDefecto.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDefecto.Location = new System.Drawing.Point(344, 109);
            this.lblDefecto.Name = "lblDefecto";
            this.lblDefecto.Size = new System.Drawing.Size(83, 20);
            this.lblDefecto.TabIndex = 3;
            this.lblDefecto.Text = " Defecto:";
            // 
            // gbxBusqueda
            // 
            this.gbxBusqueda.BackColor = System.Drawing.SystemColors.ButtonHighlight;
            this.gbxBusqueda.Controls.Add(this.rdbSetup);
            this.gbxBusqueda.Controls.Add(this.ckxAtrazo);
            this.gbxBusqueda.Controls.Add(this.label2);
            this.gbxBusqueda.Controls.Add(this.cbxConfig);
            this.gbxBusqueda.Controls.Add(this.lblConfig);
            this.gbxBusqueda.Controls.Add(this.cbxComponentes);
            this.gbxBusqueda.Controls.Add(this.lblComponente);
            this.gbxBusqueda.Controls.Add(this.btnSave);
            this.gbxBusqueda.Controls.Add(this.cbxNp);
            this.gbxBusqueda.Controls.Add(this.lblNp);
            this.gbxBusqueda.Controls.Add(this.dtpFecha);
            this.gbxBusqueda.Controls.Add(this.cbxLinea);
            this.gbxBusqueda.Controls.Add(this.cbxEstaciones);
            this.gbxBusqueda.Controls.Add(this.cbxArea);
            this.gbxBusqueda.Controls.Add(this.lblLinea);
            this.gbxBusqueda.Controls.Add(this.txtLead);
            this.gbxBusqueda.Controls.Add(this.lblAreas);
            this.gbxBusqueda.Controls.Add(this.lblBusqueda);
            this.gbxBusqueda.Controls.Add(this.label1);
            this.gbxBusqueda.Controls.Add(this.rdbComponente);
            this.gbxBusqueda.Controls.Add(this.cbxProceso);
            this.gbxBusqueda.Controls.Add(this.lblProceso);
            this.gbxBusqueda.Controls.Add(this.rdbLead);
            this.gbxBusqueda.Controls.Add(this.cbxDefecto);
            this.gbxBusqueda.Controls.Add(this.txtCantidad);
            this.gbxBusqueda.Controls.Add(this.lblCantidad);
            this.gbxBusqueda.Controls.Add(this.cbxTurno);
            this.gbxBusqueda.Controls.Add(this.lblDefecto);
            this.gbxBusqueda.Controls.Add(this.lblTurno);
            this.gbxBusqueda.Location = new System.Drawing.Point(12, 25);
            this.gbxBusqueda.Name = "gbxBusqueda";
            this.gbxBusqueda.Size = new System.Drawing.Size(1010, 243);
            this.gbxBusqueda.TabIndex = 2;
            this.gbxBusqueda.TabStop = false;
            this.gbxBusqueda.Text = "Busqueda";
            // 
            // rdbSetup
            // 
            this.rdbSetup.AutoSize = true;
            this.rdbSetup.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.rdbSetup.Location = new System.Drawing.Point(240, 105);
            this.rdbSetup.Name = "rdbSetup";
            this.rdbSetup.Size = new System.Drawing.Size(75, 24);
            this.rdbSetup.TabIndex = 25;
            this.rdbSetup.TabStop = true;
            this.rdbSetup.Text = "Setup";
            this.rdbSetup.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.rdbSetup.UseVisualStyleBackColor = true;
            this.rdbSetup.CheckedChanged += new System.EventHandler(this.rdbSetup_CheckedChanged);
            // 
            // ckxAtrazo
            // 
            this.ckxAtrazo.AutoSize = true;
            this.ckxAtrazo.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ckxAtrazo.Location = new System.Drawing.Point(804, 108);
            this.ckxAtrazo.Name = "ckxAtrazo";
            this.ckxAtrazo.Size = new System.Drawing.Size(81, 24);
            this.ckxAtrazo.TabIndex = 24;
            this.ckxAtrazo.Text = "Atraso";
            this.ckxAtrazo.UseVisualStyleBackColor = true;
            this.ckxAtrazo.CheckedChanged += new System.EventHandler(this.ckxAtrazo_CheckedChanged);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(738, 19);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(60, 20);
            this.label2.TabIndex = 23;
            this.label2.Text = "Turno:";
            // 
            // cbxConfig
            // 
            this.cbxConfig.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxConfig.FormattingEnabled = true;
            this.cbxConfig.Items.AddRange(new object[] {
            "MM",
            "ML",
            "LL",
            "LM",
            "L8"});
            this.cbxConfig.Location = new System.Drawing.Point(88, 175);
            this.cbxConfig.Name = "cbxConfig";
            this.cbxConfig.Size = new System.Drawing.Size(85, 26);
            this.cbxConfig.TabIndex = 21;
            this.cbxConfig.Visible = false;
            // 
            // lblConfig
            // 
            this.lblConfig.AutoSize = true;
            this.lblConfig.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblConfig.Location = new System.Drawing.Point(21, 177);
            this.lblConfig.Name = "lblConfig";
            this.lblConfig.Size = new System.Drawing.Size(61, 20);
            this.lblConfig.TabIndex = 20;
            this.lblConfig.Text = "Config";
            this.lblConfig.Visible = false;
            // 
            // cbxComponentes
            // 
            this.cbxComponentes.AutoCompleteMode = System.Windows.Forms.AutoCompleteMode.Suggest;
            this.cbxComponentes.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.CustomSource;
            this.cbxComponentes.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxComponentes.FormattingEnabled = true;
            this.cbxComponentes.Location = new System.Drawing.Point(88, 212);
            this.cbxComponentes.Name = "cbxComponentes";
            this.cbxComponentes.Size = new System.Drawing.Size(319, 26);
            this.cbxComponentes.TabIndex = 19;
            this.cbxComponentes.Visible = false;
            this.cbxComponentes.DropDownClosed += new System.EventHandler(this.cbxComponentes_DropDownClosed);
            // 
            // lblComponente
            // 
            this.lblComponente.AutoSize = true;
            this.lblComponente.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblComponente.Location = new System.Drawing.Point(4, 215);
            this.lblComponente.Name = "lblComponente";
            this.lblComponente.Size = new System.Drawing.Size(78, 20);
            this.lblComponente.TabIndex = 18;
            this.lblComponente.Text = "Material:";
            this.lblComponente.Visible = false;
            // 
            // btnSave
            // 
            this.btnSave.Location = new System.Drawing.Point(876, 177);
            this.btnSave.Name = "btnSave";
            this.btnSave.Size = new System.Drawing.Size(128, 59);
            this.btnSave.TabIndex = 16;
            this.btnSave.Text = "Guardar";
            this.btnSave.UseVisualStyleBackColor = true;
            this.btnSave.Click += new System.EventHandler(this.btnSave_Click);
            // 
            // cbxNp
            // 
            this.cbxNp.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxNp.FormattingEnabled = true;
            this.cbxNp.Location = new System.Drawing.Point(433, 185);
            this.cbxNp.Name = "cbxNp";
            this.cbxNp.Size = new System.Drawing.Size(158, 26);
            this.cbxNp.TabIndex = 15;
            this.cbxNp.Visible = false;
            this.cbxNp.DropDownClosed += new System.EventHandler(this.cbxNp_DropDownClosed);
            // 
            // lblNp
            // 
            this.lblNp.AutoSize = true;
            this.lblNp.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNp.Location = new System.Drawing.Point(335, 187);
            this.lblNp.Name = "lblNp";
            this.lblNp.Size = new System.Drawing.Size(92, 20);
            this.lblNp.TabIndex = 14;
            this.lblNp.Text = "Numparte:";
            this.lblNp.Visible = false;
            // 
            // dtpFecha
            // 
            this.dtpFecha.Enabled = false;
            this.dtpFecha.Location = new System.Drawing.Point(804, 19);
            this.dtpFecha.Name = "dtpFecha";
            this.dtpFecha.Size = new System.Drawing.Size(200, 20);
            this.dtpFecha.TabIndex = 13;
            // 
            // cbxLinea
            // 
            this.cbxLinea.Enabled = false;
            this.cbxLinea.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxLinea.FormattingEnabled = true;
            this.cbxLinea.Location = new System.Drawing.Point(88, 66);
            this.cbxLinea.Name = "cbxLinea";
            this.cbxLinea.Size = new System.Drawing.Size(158, 26);
            this.cbxLinea.TabIndex = 5;
            this.cbxLinea.DropDownClosed += new System.EventHandler(this.cbxLinea_DropDownClosed);
            // 
            // cbxEstaciones
            // 
            this.cbxEstaciones.Enabled = false;
            this.cbxEstaciones.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxEstaciones.FormattingEnabled = true;
            this.cbxEstaciones.Location = new System.Drawing.Point(433, 65);
            this.cbxEstaciones.Name = "cbxEstaciones";
            this.cbxEstaciones.Size = new System.Drawing.Size(245, 26);
            this.cbxEstaciones.TabIndex = 8;
            this.cbxEstaciones.DropDownClosed += new System.EventHandler(this.cbxEstaciones_DropDownClosed);
            // 
            // cbxArea
            // 
            this.cbxArea.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxArea.FormattingEnabled = true;
            this.cbxArea.Location = new System.Drawing.Point(88, 25);
            this.cbxArea.Name = "cbxArea";
            this.cbxArea.Size = new System.Drawing.Size(158, 26);
            this.cbxArea.TabIndex = 4;
            this.cbxArea.DropDownClosed += new System.EventHandler(this.cbxArea_DropDownClosed);
            // 
            // txtLead
            // 
            this.txtLead.AutoCompleteMode = System.Windows.Forms.AutoCompleteMode.Suggest;
            this.txtLead.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.CustomSource;
            this.txtLead.Enabled = false;
            this.txtLead.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtLead.Location = new System.Drawing.Point(88, 135);
            this.txtLead.Name = "txtLead";
            this.txtLead.Size = new System.Drawing.Size(158, 24);
            this.txtLead.TabIndex = 8;
            this.txtLead.KeyDown += new System.Windows.Forms.KeyEventHandler(this.txtLead_KeyDown);
            // 
            // lblBusqueda
            // 
            this.lblBusqueda.AutoSize = true;
            this.lblBusqueda.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblBusqueda.Location = new System.Drawing.Point(12, 136);
            this.lblBusqueda.Name = "lblBusqueda";
            this.lblBusqueda.Size = new System.Drawing.Size(70, 20);
            this.lblBusqueda.TabIndex = 4;
            this.lblBusqueda.Text = "Buscar:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(343, 67);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(84, 20);
            this.label1.TabIndex = 7;
            this.label1.Text = "Estacion:";
            // 
            // rdbComponente
            // 
            this.rdbComponente.AutoSize = true;
            this.rdbComponente.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.rdbComponente.Location = new System.Drawing.Point(28, 105);
            this.rdbComponente.Name = "rdbComponente";
            this.rdbComponente.Size = new System.Drawing.Size(129, 24);
            this.rdbComponente.TabIndex = 6;
            this.rdbComponente.TabStop = true;
            this.rdbComponente.Text = "Componente";
            this.rdbComponente.UseVisualStyleBackColor = true;
            this.rdbComponente.CheckedChanged += new System.EventHandler(this.rdbComponente_CheckedChanged);
            // 
            // cbxProceso
            // 
            this.cbxProceso.Enabled = false;
            this.cbxProceso.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxProceso.FormattingEnabled = true;
            this.cbxProceso.Location = new System.Drawing.Point(433, 26);
            this.cbxProceso.Name = "cbxProceso";
            this.cbxProceso.Size = new System.Drawing.Size(219, 26);
            this.cbxProceso.TabIndex = 6;
            this.cbxProceso.DropDownClosed += new System.EventHandler(this.cbxProceso_DropDownClosed);
            // 
            // rdbLead
            // 
            this.rdbLead.AutoSize = true;
            this.rdbLead.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.rdbLead.Location = new System.Drawing.Point(161, 105);
            this.rdbLead.Name = "rdbLead";
            this.rdbLead.Size = new System.Drawing.Size(67, 24);
            this.rdbLead.TabIndex = 7;
            this.rdbLead.TabStop = true;
            this.rdbLead.Text = "Lead";
            this.rdbLead.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.rdbLead.UseVisualStyleBackColor = true;
            this.rdbLead.CheckedChanged += new System.EventHandler(this.rdbLead_CheckedChanged);
            // 
            // cbxDefecto
            // 
            this.cbxDefecto.Enabled = false;
            this.cbxDefecto.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxDefecto.FormattingEnabled = true;
            this.cbxDefecto.Location = new System.Drawing.Point(433, 106);
            this.cbxDefecto.Name = "cbxDefecto";
            this.cbxDefecto.Size = new System.Drawing.Size(309, 26);
            this.cbxDefecto.TabIndex = 7;
            this.cbxDefecto.DropDownClosed += new System.EventHandler(this.cbxDefecto_DropDownClosed);
            // 
            // txtCantidad
            // 
            this.txtCantidad.Enabled = false;
            this.txtCantidad.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtCantidad.Location = new System.Drawing.Point(433, 149);
            this.txtCantidad.Name = "txtCantidad";
            this.txtCantidad.Size = new System.Drawing.Size(119, 24);
            this.txtCantidad.TabIndex = 12;
            // 
            // lblCantidad
            // 
            this.lblCantidad.AutoSize = true;
            this.lblCantidad.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCantidad.Location = new System.Drawing.Point(341, 151);
            this.lblCantidad.Name = "lblCantidad";
            this.lblCantidad.Size = new System.Drawing.Size(86, 20);
            this.lblCantidad.TabIndex = 11;
            this.lblCantidad.Text = "Cantidad:";
            // 
            // cbxTurno
            // 
            this.cbxTurno.Enabled = false;
            this.cbxTurno.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxTurno.FormattingEnabled = true;
            this.cbxTurno.Items.AddRange(new object[] {
            "A",
            "B"});
            this.cbxTurno.Location = new System.Drawing.Point(804, 58);
            this.cbxTurno.Name = "cbxTurno";
            this.cbxTurno.Size = new System.Drawing.Size(69, 26);
            this.cbxTurno.TabIndex = 8;
            // 
            // lblTurno
            // 
            this.lblTurno.AutoSize = true;
            this.lblTurno.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTurno.Location = new System.Drawing.Point(738, 61);
            this.lblTurno.Name = "lblTurno";
            this.lblTurno.Size = new System.Drawing.Size(60, 20);
            this.lblTurno.TabIndex = 10;
            this.lblTurno.Text = "Turno:";
            // 
            // lblMensajes
            // 
            this.lblMensajes.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblMensajes.Location = new System.Drawing.Point(12, 602);
            this.lblMensajes.Name = "lblMensajes";
            this.lblMensajes.Size = new System.Drawing.Size(1010, 33);
            this.lblMensajes.TabIndex = 3;
            this.lblMensajes.Text = "MENSAJES";
            this.lblMensajes.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // frmCoax
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DimGray;
            this.ClientSize = new System.Drawing.Size(1034, 637);
            this.Controls.Add(this.lblMensajes);
            this.Controls.Add(this.gbxBusqueda);
            this.Controls.Add(this.groupBox2);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frmCoax";
            this.Text = "CAPTURA";
            this.Load += new System.EventHandler(this.frmCoax_Load);
            this.groupBox2.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dgvComponentes)).EndInit();
            this.gbxBusqueda.ResumeLayout(false);
            this.gbxBusqueda.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Label lblDefecto;
        private System.Windows.Forms.Label lblProceso;
        private System.Windows.Forms.Label lblLinea;
        private System.Windows.Forms.Label lblAreas;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.GroupBox gbxBusqueda;
        private System.Windows.Forms.RadioButton rdbLead;
        private System.Windows.Forms.RadioButton rdbComponente;
        private System.Windows.Forms.TextBox txtLead;
        private System.Windows.Forms.Label lblBusqueda;
        private System.Windows.Forms.ComboBox cbxDefecto;
        private System.Windows.Forms.ComboBox cbxProceso;
        private System.Windows.Forms.ComboBox cbxLinea;
        private System.Windows.Forms.ComboBox cbxArea;
        private System.Windows.Forms.DataGridView dgvComponentes;
        private System.Windows.Forms.TextBox txtCantidad;
        private System.Windows.Forms.Label lblCantidad;
        private System.Windows.Forms.ComboBox cbxTurno;
        private System.Windows.Forms.Label lblTurno;
        private System.Windows.Forms.ComboBox cbxEstaciones;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DateTimePicker dtpFecha;
        private System.Windows.Forms.ComboBox cbxNp;
        private System.Windows.Forms.Label lblNp;
        private System.Windows.Forms.Label lblMensajes;
        private System.Windows.Forms.Button btnSave;
        private System.Windows.Forms.Label lblComponente;
        private System.Windows.Forms.ComboBox cbxComponentes;
        private System.Windows.Forms.ComboBox cbxConfig;
        private System.Windows.Forms.Label lblConfig;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.CheckBox ckxAtrazo;
        private System.Windows.Forms.RadioButton rdbSetup;
    }
}