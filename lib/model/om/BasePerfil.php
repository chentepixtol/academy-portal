<?php

/**
 * Base class that represents a row from the 'sf_guard_user_profile' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jan 17 14:57:29 2010
 *
 * @package    lib.model.om
 */
abstract class BasePerfil extends BaseObject  implements Persistent {


  const PEER = 'PerfilPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PerfilPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the apellido_paterno field.
	 * @var        string
	 */
	protected $apellido_paterno;

	/**
	 * The value for the apellido_materno field.
	 * @var        string
	 */
	protected $apellido_materno;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the telefono field.
	 * @var        int
	 */
	protected $telefono;

	/**
	 * The value for the extension_1 field.
	 * @var        int
	 */
	protected $extension_1;

	/**
	 * The value for the extension_2 field.
	 * @var        int
	 */
	protected $extension_2;

	/**
	 * The value for the movil field.
	 * @var        string
	 */
	protected $movil;

	/**
	 * The value for the estancia field.
	 * @var        string
	 */
	protected $estancia;

	/**
	 * The value for the horario field.
	 * @var        string
	 */
	protected $horario;

	/**
	 * The value for the foto field.
	 * @var        string
	 */
	protected $foto;

	/**
	 * The value for the enlace field.
	 * @var        string
	 */
	protected $enlace;

	/**
	 * @var        sfGuardUser
	 */
	protected $asfGuardUser;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BasePerfil object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [nombre] column value.
	 * 
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [apellido_paterno] column value.
	 * 
	 * @return     string
	 */
	public function getApellidoPaterno()
	{
		return $this->apellido_paterno;
	}

	/**
	 * Get the [apellido_materno] column value.
	 * 
	 * @return     string
	 */
	public function getApellidoMaterno()
	{
		return $this->apellido_materno;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [telefono] column value.
	 * 
	 * @return     int
	 */
	public function getTelefono()
	{
		return $this->telefono;
	}

	/**
	 * Get the [extension_1] column value.
	 * 
	 * @return     int
	 */
	public function getExtension1()
	{
		return $this->extension_1;
	}

	/**
	 * Get the [extension_2] column value.
	 * 
	 * @return     int
	 */
	public function getExtension2()
	{
		return $this->extension_2;
	}

	/**
	 * Get the [movil] column value.
	 * 
	 * @return     string
	 */
	public function getMovil()
	{
		return $this->movil;
	}

	/**
	 * Get the [estancia] column value.
	 * 
	 * @return     string
	 */
	public function getEstancia()
	{
		return $this->estancia;
	}

	/**
	 * Get the [horario] column value.
	 * 
	 * @return     string
	 */
	public function getHorario()
	{
		return $this->horario;
	}

	/**
	 * Get the [foto] column value.
	 * 
	 * @return     string
	 */
	public function getFoto()
	{
		return $this->foto;
	}

	/**
	 * Get the [enlace] column value.
	 * 
	 * @return     string
	 */
	public function getEnlace()
	{
		return $this->enlace;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PerfilPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = PerfilPeer::USER_ID;
		}

		if ($this->asfGuardUser !== null && $this->asfGuardUser->getId() !== $v) {
			$this->asfGuardUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = PerfilPeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [apellido_paterno] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setApellidoPaterno($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->apellido_paterno !== $v) {
			$this->apellido_paterno = $v;
			$this->modifiedColumns[] = PerfilPeer::APELLIDO_PATERNO;
		}

		return $this;
	} // setApellidoPaterno()

	/**
	 * Set the value of [apellido_materno] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setApellidoMaterno($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->apellido_materno !== $v) {
			$this->apellido_materno = $v;
			$this->modifiedColumns[] = PerfilPeer::APELLIDO_MATERNO;
		}

		return $this;
	} // setApellidoMaterno()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = PerfilPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [telefono] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setTelefono($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->telefono !== $v) {
			$this->telefono = $v;
			$this->modifiedColumns[] = PerfilPeer::TELEFONO;
		}

		return $this;
	} // setTelefono()

	/**
	 * Set the value of [extension_1] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setExtension1($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->extension_1 !== $v) {
			$this->extension_1 = $v;
			$this->modifiedColumns[] = PerfilPeer::EXTENSION_1;
		}

		return $this;
	} // setExtension1()

	/**
	 * Set the value of [extension_2] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setExtension2($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->extension_2 !== $v) {
			$this->extension_2 = $v;
			$this->modifiedColumns[] = PerfilPeer::EXTENSION_2;
		}

		return $this;
	} // setExtension2()

	/**
	 * Set the value of [movil] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setMovil($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->movil !== $v) {
			$this->movil = $v;
			$this->modifiedColumns[] = PerfilPeer::MOVIL;
		}

		return $this;
	} // setMovil()

	/**
	 * Set the value of [estancia] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setEstancia($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->estancia !== $v) {
			$this->estancia = $v;
			$this->modifiedColumns[] = PerfilPeer::ESTANCIA;
		}

		return $this;
	} // setEstancia()

	/**
	 * Set the value of [horario] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setHorario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->horario !== $v) {
			$this->horario = $v;
			$this->modifiedColumns[] = PerfilPeer::HORARIO;
		}

		return $this;
	} // setHorario()

	/**
	 * Set the value of [foto] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setFoto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->foto !== $v) {
			$this->foto = $v;
			$this->modifiedColumns[] = PerfilPeer::FOTO;
		}

		return $this;
	} // setFoto()

	/**
	 * Set the value of [enlace] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setEnlace($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->enlace !== $v) {
			$this->enlace = $v;
			$this->modifiedColumns[] = PerfilPeer::ENLACE;
		}

		return $this;
	} // setEnlace()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->apellido_paterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->apellido_materno = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->telefono = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->extension_1 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->extension_2 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->movil = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->estancia = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->horario = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->foto = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->enlace = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 14; // 14 = PerfilPeer::NUM_COLUMNS - PerfilPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Perfil object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->asfGuardUser !== null && $this->user_id !== $this->asfGuardUser->getId()) {
			$this->asfGuardUser = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PerfilPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->asfGuardUser = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasePerfil:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			PerfilPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BasePerfil:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasePerfil:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BasePerfil:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			PerfilPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->asfGuardUser !== null) {
				if ($this->asfGuardUser->isModified() || $this->asfGuardUser->isNew()) {
					$affectedRows += $this->asfGuardUser->save($con);
				}
				$this->setsfGuardUser($this->asfGuardUser);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PerfilPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PerfilPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += PerfilPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->asfGuardUser !== null) {
				if (!$this->asfGuardUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfGuardUser->getValidationFailures());
				}
			}


			if (($retval = PerfilPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PerfilPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getApellidoPaterno();
				break;
			case 4:
				return $this->getApellidoMaterno();
				break;
			case 5:
				return $this->getEmail();
				break;
			case 6:
				return $this->getTelefono();
				break;
			case 7:
				return $this->getExtension1();
				break;
			case 8:
				return $this->getExtension2();
				break;
			case 9:
				return $this->getMovil();
				break;
			case 10:
				return $this->getEstancia();
				break;
			case 11:
				return $this->getHorario();
				break;
			case 12:
				return $this->getFoto();
				break;
			case 13:
				return $this->getEnlace();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = PerfilPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getApellidoPaterno(),
			$keys[4] => $this->getApellidoMaterno(),
			$keys[5] => $this->getEmail(),
			$keys[6] => $this->getTelefono(),
			$keys[7] => $this->getExtension1(),
			$keys[8] => $this->getExtension2(),
			$keys[9] => $this->getMovil(),
			$keys[10] => $this->getEstancia(),
			$keys[11] => $this->getHorario(),
			$keys[12] => $this->getFoto(),
			$keys[13] => $this->getEnlace(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PerfilPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setApellidoPaterno($value);
				break;
			case 4:
				$this->setApellidoMaterno($value);
				break;
			case 5:
				$this->setEmail($value);
				break;
			case 6:
				$this->setTelefono($value);
				break;
			case 7:
				$this->setExtension1($value);
				break;
			case 8:
				$this->setExtension2($value);
				break;
			case 9:
				$this->setMovil($value);
				break;
			case 10:
				$this->setEstancia($value);
				break;
			case 11:
				$this->setHorario($value);
				break;
			case 12:
				$this->setFoto($value);
				break;
			case 13:
				$this->setEnlace($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PerfilPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setApellidoPaterno($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setApellidoMaterno($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTelefono($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setExtension1($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setExtension2($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMovil($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEstancia($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setHorario($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFoto($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setEnlace($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PerfilPeer::DATABASE_NAME);

		if ($this->isColumnModified(PerfilPeer::ID)) $criteria->add(PerfilPeer::ID, $this->id);
		if ($this->isColumnModified(PerfilPeer::USER_ID)) $criteria->add(PerfilPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PerfilPeer::NOMBRE)) $criteria->add(PerfilPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(PerfilPeer::APELLIDO_PATERNO)) $criteria->add(PerfilPeer::APELLIDO_PATERNO, $this->apellido_paterno);
		if ($this->isColumnModified(PerfilPeer::APELLIDO_MATERNO)) $criteria->add(PerfilPeer::APELLIDO_MATERNO, $this->apellido_materno);
		if ($this->isColumnModified(PerfilPeer::EMAIL)) $criteria->add(PerfilPeer::EMAIL, $this->email);
		if ($this->isColumnModified(PerfilPeer::TELEFONO)) $criteria->add(PerfilPeer::TELEFONO, $this->telefono);
		if ($this->isColumnModified(PerfilPeer::EXTENSION_1)) $criteria->add(PerfilPeer::EXTENSION_1, $this->extension_1);
		if ($this->isColumnModified(PerfilPeer::EXTENSION_2)) $criteria->add(PerfilPeer::EXTENSION_2, $this->extension_2);
		if ($this->isColumnModified(PerfilPeer::MOVIL)) $criteria->add(PerfilPeer::MOVIL, $this->movil);
		if ($this->isColumnModified(PerfilPeer::ESTANCIA)) $criteria->add(PerfilPeer::ESTANCIA, $this->estancia);
		if ($this->isColumnModified(PerfilPeer::HORARIO)) $criteria->add(PerfilPeer::HORARIO, $this->horario);
		if ($this->isColumnModified(PerfilPeer::FOTO)) $criteria->add(PerfilPeer::FOTO, $this->foto);
		if ($this->isColumnModified(PerfilPeer::ENLACE)) $criteria->add(PerfilPeer::ENLACE, $this->enlace);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PerfilPeer::DATABASE_NAME);

		$criteria->add(PerfilPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Perfil (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUserId($this->user_id);

		$copyObj->setNombre($this->nombre);

		$copyObj->setApellidoPaterno($this->apellido_paterno);

		$copyObj->setApellidoMaterno($this->apellido_materno);

		$copyObj->setEmail($this->email);

		$copyObj->setTelefono($this->telefono);

		$copyObj->setExtension1($this->extension_1);

		$copyObj->setExtension2($this->extension_2);

		$copyObj->setMovil($this->movil);

		$copyObj->setEstancia($this->estancia);

		$copyObj->setHorario($this->horario);

		$copyObj->setFoto($this->foto);

		$copyObj->setEnlace($this->enlace);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Perfil Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     PerfilPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PerfilPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a sfGuardUser object.
	 *
	 * @param      sfGuardUser $v
	 * @return     Perfil The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUser(sfGuardUser $v = null)
	{
		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}

		$this->asfGuardUser = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addPerfil($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfGuardUser The associated sfGuardUser object.
	 * @throws     PropelException
	 */
	public function getsfGuardUser(PropelPDO $con = null)
	{
		if ($this->asfGuardUser === null && ($this->user_id !== null)) {
			$c = new Criteria(sfGuardUserPeer::DATABASE_NAME);
			$c->add(sfGuardUserPeer::ID, $this->user_id);
			$this->asfGuardUser = sfGuardUserPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->asfGuardUser->addPerfils($this);
			 */
		}
		return $this->asfGuardUser;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->asfGuardUser = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BasePerfil:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BasePerfil::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BasePerfil
